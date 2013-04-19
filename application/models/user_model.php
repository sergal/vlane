<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_user($id)
    {
        $row = $this->db->get_where('users', array('id' => $id));
        return $row->row_array();
        //$user['hobbies']=$this->load->Hobbies_model->get_by_user($user_id);
    }

    public function get_by_group($group_id)
    {
        $this->db->select('name,users.id');
        $this->db->from('members');
        $this->db->join('users', 'users.id = members.user_id');
        $this->db->where('group_id', $group_id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_by_school($name_school)
    {
        $user = $this->db->get_where('users', array('school' => $name_school));
        return $user->result_array();
    }

    public function get_by_city($city)
    {
        $user = $this->get_where('users', array('city' => $city));
        return $user->result_array();

    }

    public function get_by_login($login)
    {
        $user = $this->db->get_where('users', array('login' => $login));
        return $user->row_array();

    }

    public function get_db_password($login, $password) {

        return md5($login . $password);
    }
    public function register_user($login, $pass){
        $data = array('login' => md5($login), 'password' => md5($pass));
        $row = $this->db->insert('users', $data);
        return $row;
    }
}


