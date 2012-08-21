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
}