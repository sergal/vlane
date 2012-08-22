<?php
class Hobbies_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_by_user($user_id)
    {
        $hobby = $this->db->get_where('hobbies', array('user_id' => $user_id));
        return $hobby->result_array();
    }

    public function get_add($user_id, $text)
    {
        $data = array('user_id' => $user_id, 'text' => $text);
        $this->db->insert('hobbies', $data);
    }

    public function get_remove($id)
    {
        $this->db->delete('hobbies', array('id' => $id));
    }
}

?>