<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent__construct();
    }

    public function get_user($id)
    {
        $user = $this->db->query("SELECT id FROM users");
        return $user->result_array();
    }
}


