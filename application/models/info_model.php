<?php
defined('BASEPATH') or exit('No direct script access allowed');

class info_model extends CI_Model
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
        $this->db->from('info_tabel');
        $this->db->order_by('id_info','desc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail info
    public function detail($id_info)
    {
        $this->db->select('*');
        $this->db->from('info_tabel');
        $this->db->where('id_info', $id_info);
        $this->db->order_by('id_info', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah project
    public function tambah($data)
    {
        $this->db->insert('info_tabel', $data);
    }

    // Edit
    public function edit($id_info, $data)
    {
        $this->db->where('id_info', $id_info);
        $this->db->update('info_tabel', $data);
    }
    // delete
    public function delete($data)
    {
        $this->db->where('id_info', $data);
        $this->db->delete('info_tabel');
    }

}
   
