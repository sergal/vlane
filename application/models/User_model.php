<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_users($id)
    {
        $user = $this->db->get_where('users', array('id' => $id));
        return $user->row_array();
    }

    public function get_by_group($group_id)
    {
        $this->db->select("user_id");
        $arr_users = $this->db->get_where('members', array('group_id' => $group_id));
        foreach ($arr_users as $elem) {
            $users[] = $this->get_user($elem["user_id"]);
        }
        return $users;


    }
}


