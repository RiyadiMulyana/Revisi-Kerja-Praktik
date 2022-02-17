<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Dasboard',
            'isi' => 'dashboard/list',
            'project' => $this->project_model->listing(),
        );
        $this->load->view('layout/wraper', $data, FALSE);
    }
}