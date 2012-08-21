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
        $user = $this->db->get_where('users', array('id' => $id));
        return $user->row_array();
    }

    public function get_by_school($name_school)
    {
        $user = $this->db->get_where('user', array('school' => $name_school));
        return $user->result_array();
    }

    public function get_by_city($city)
    {
        $user = $this->get_where('user', array('city' => $city));
        return $user->result_array();
    }
}


