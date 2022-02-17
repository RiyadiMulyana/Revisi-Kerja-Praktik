<?php
defined('BASEPATH') or exit('No direct script access allowed');

class subproject extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
    }
    
    public function list($id_project)
    {
        $project = $this->subproject_model->getall($id_project);

        $data = array(
            'id_project' => $id_project,
            'title' => 'sub project',
            'project' => $project,
            'isi' => 'subproject/tabel'
        );

        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function tambah($id_project)
    {
        $project = $this->subproject_model->getall($id_project);
        $data = array(
            'title' => 'tambah subproject',
            'id_project' => $id_project,
            'isi' => 'subproject/tambah'
        );

        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function delete($id_subproject)
    {
        $this->subproject_model->delete($id_subproject);

        redirect('project/');
    }

    public function edit($id_subproject)
    {
        $project = $this->subproject_model->detail($id_subproject);

        $data = array(
            'title' => 'project',
            'project' => $project[0],
            'isi' => 'subproject/edit',
        );

        $this->load->view('layout/wraper', $data, FALSE);
    }

    public function proses_tambah()
    {
        $data = array(
            'id_project' => $this->input->post('id_project'),
            'tugas' => $this->input->post('namatugas'),
            'selesai' => $this->input->post('status'),
            'start'   => $this->input->post('start'),
            'end'   => $this->input->post('end'),
            'pj_project' => $this->input->post('pj'),
        );

        // print_r($data);die;
        $this->subproject_model->tambah($data);
        redirect('subproject/list/'.$data['id_project']);
    }

    public function proses_edit()
    {
        $data = array(
            'id_subproject' => $this->input->post('id_subproject'),
            'tugas' => $this->input->post('tugas'),
            'selesai' => $this->input->post('selesai'),
            'start'   => $this->input->post('start'),
            'end'   => $this->input->post('end'),
            'pj_project' => $this->input->post('pj'),
        );

        $this->subproject_model->edit($this->input->post('id_subproject'), $data);
        redirect('subproject/list/'.$this->input->post('id_project'));
    }
}
