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
        $this->db->like('name', $like);
        $name = $this->db->get();
        return $name->result_array();
    }
    public function search_group($id)
    {$this->db->select('name, nickname');
        $this->db->from('members');
        $this->db->join('groups','groups.id=members.group_id');
        $this->db->where('members.user_id', $id);
        $group = $this->db->get();
        return $group->result_array();


    }



}
