<?php
defined('BASEPATH') or exit('No direct script access allowed');

class infoperusahaan extends CI_Controller
{
     // load model
     public function __construct()
     {
         parent::__construct();
         $this->load->model('info_model');
       
     }
    public function index()
    {
        $info_tabel=$this->info_model->listing();
        $data = array(
            'title' => 'infoperusahaan',
            'info_tabel' => $info_tabel,
            'isi' => 'infoperusahaan/info_tabel'
        );
        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function delete($id_info){
        $this->info_model->delete($id_info);

        redirect('infoperusahaan/');
    }

    public function edit($id_info){
        $info_perusahaan = $this->info_model->detail($id_info);

        $data = array(
            'title' => 'infoperusahaan',
            'infoperusahaan' => $infoperusahaan,
            'isi' => 'infoperusahaan/edit',
            'id_info' => $id_info,
        );
        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function proses_edit(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'divisi' => $this->input->post('divisi'),
            'status' =>  $this->input->post('status'),
           
        );

        $this->info_model->edit($this->input->post('id_info'), $data);
        redirect('infoperusahaan/');
    }

    public function c()
    {
       
        $this->load->view('dashboard/list', FALSE);
    }
    
    //tambah user
    public function tambah()
    {
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama',
            'nama',
            'required',
            array('required' => '%s harus diisi')
        );
       
        

        if ($valid->run() === FALSE) {
            // end validasi
            $data = array(
                'title' => 'Tambah infoperusahaan',
                'judul' => 'Form Tambah Data infoperusahaan',
                'isi'   => 'infoperusahaan/tambah'
            );
            $this->load->view('layout/wraper', $data, FALSE);
            // masuk database
        } else {
            $i = $this->input;
            $data = array(
                'nama'      => $i->post('nama'),
                'divisi'     => $i->post('divisi'),
                'status'  => $i->post('status')
            );
            $this->info_model->tambah($data);
            $this->session->set_flashdata('sukses', 'DATA TELAH DITAMBAH');
            redirect(base_url('infoperusahaan'), 'refresh');
        }
        // end masuk database
    }
}