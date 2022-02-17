<?php
defined('BASEPATH') or exit('No direct script access allowed');

class project_model extends CI_Model
{
    //load database
    
    public function __construct()

    {
        parent::__construct();
        $this->load->database();

    }
   
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->order_by('id_project','desc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail project
    public function detail($id_project)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('id_project', $id_project);
        $this->db->order_by('id_project', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah project
    public function tambah($data)
    {
        $this->db->insert('project', $data);
    }

    // Edit
    public function edit($id_project, $data)
    {
        $this->db->where('id_project', $id_project);
        $this->db->update('project', $data);
    }
    // delete
    public function delete($data)
    {
        $this->db->where('id_project', $data);
        $this->db->delete('project');
    }

}
   
