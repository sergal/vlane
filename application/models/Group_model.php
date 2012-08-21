<?php
class Group_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_group($id)
    {
        $group = $this->db->get_where('groups', array('id' => $id));
        return $group->row_array();
    }

    public function get_by_user($user_id)
    {
        $this->db->select('name, nickname, year, type');
        $this->db->from('members');
        $this->db->join('groups', 'groups.id = members.group_id');
        $this->db->join('seasons', 'groups.season_id = seasons.id');
        $this->db->where('members.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }
}