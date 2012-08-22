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

    public function delete_friend($friend_id, $user_id)
{
    $delete_friend = array(
        'user_id' => $user_id,
        'friend_id' => $friend_id
    );
    $this->db->delete('friends', $delete_friend);
}

    public function get_friends($user_id)
    {
        $this->db->select('name, friends.friend_id');
        $this->db->from('friends');
        $this->db->join('users', 'users.id = friends.user_id');
        $this->db->where('user_id', $user_id);
        $friends = $this->db->get();
        return $friends->result_array();
    }
}