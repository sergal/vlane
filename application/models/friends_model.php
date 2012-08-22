<?php
class Friends_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function add_friend($friend_id, $user_id)
    {
        $add_friend = array(
            'user_id' => $user_id,
            'friend_id' => $friend_id
        );
        $this->db->insert('friends', $add_friend);

    }

}