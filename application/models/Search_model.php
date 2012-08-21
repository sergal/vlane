<?php
class Search_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function search_name($like)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('name', '$like');
        $name = $this->db->get();
        return $name->result_array();
    }

}
