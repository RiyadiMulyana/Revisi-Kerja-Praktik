<?php
defined('BASEPATH') or exit('No direct script access allowed');

class project extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
    }
    public function index()
    {
        $project = $this->project_model->listing();
        $data = array(
            'title' => 'project',
            'project' => $project,
            'isi' => 'project/tabel'
        );
        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function delete($id_project)
    {
        $this->project_model->delete($id_project);

        redirect('project/');
    }

    public function edit($id_project)
    {
        $project = $this->project_model->detail($id_project);

        $data = array(
            'title' => 'project',
            'project' => $project,
            'isi' => 'project/edit',
            'id_project' => $id_project,
        );
        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function proses_edit()
    {
        $data = array(
            'nama'           => $this->input->post('nama'),
            'divisi'         => $this->input->post('divisi'),
            'status'         =>  $this->input->post('status'),
            'link'           => $this->input->post('link'),
            'agenda_project' => $this->input->post('agenda_project'),
            'start'          => $this->input->post('start'),
            'end'            => $this->input->post('end'), 
        );

        // print_r($data);die;
        $this->project_model->edit($this->input->post('id_project'), $data);
        redirect('project/');
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
            'Nama project',
            'required',
            array('required' => '%s harus diisi')
        );



        if ($valid->run() === FALSE) {
            // end validasi
            $data = array(
                'title' => 'Tambah project',
                'judul' => 'Form Tambah Data project',
                'isi'   => 'project/tambah'
            );
            $this->load->view('layout/wraper', $data, FALSE);
            // masuk database
        } else {
            $i = $this->input;
        
            $data = array(
                'nama'      => $i->post('nama'),
                'divisi'     => $i->post('divisi'),
                'start'     => $i->post('start'),
                'end'     => $i->post('end'),
                'status'  => $i->post('status')
            );
            $this->project_model->tambah($data);
            $this->session->set_flashdata('sukses', 'DATA TELAH DITAMBAH');
            redirect(base_url('project'), 'refresh');
        }
        // end masuk database
    }
}
