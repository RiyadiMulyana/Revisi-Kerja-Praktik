<?php
defined('BASEPATH') or exit('No direct script access allowed');

class subproject_model extends CI_Model
{
    //load database
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

   public function getall($id_subproject)
    {
        $this->db->select('*');
        $this->db->from('subproject');
        $this->db->where('id_project', $id_subproject);
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('subproject');
        $this->db->order_by('id_project','desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Detail project
    public function detail($id_subproject)
    {
        $this->db->select('*');
        $this->db->from('subproject');
        $this->db->where('id_subproject', $id_subproject);
        $query = $this->db->get();
        return $query->result_array();
    }

    // tambah project
    public function tambah($data)
    {
        $this->db->insert('subproject', $data);
    }

    // Edit
    public function edit($id_subproject, $data)
    {
        $this->db->where('id_subproject', $id_subproject);
        $this->db->update('subproject', $data);
    }

    // delete
    public function delete($id_subproject)
    {
        $this->db->where('id_subproject', $id_subproject);
        $this->db->delete('subproject');
    }

}
   
