<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
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
        $this->db->from('user');
        $this->db->order_by('id_user','desc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail user
    public function detail($id_user)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // tambah user
    public function tambah($data)
    {
        $this->db->insert('user', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('user', $data);
    }
    // delete
    public function delete($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('user', $data);
    }

    // Login user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username' => $username,
            'password' => SHA1($password)
        ));
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
}
   
