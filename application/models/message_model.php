<?php
class Message_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function send_message($text, $sender, $receiver)
    {
        $time = time();
        $message = array(
            'text' => $text,
            'sender_id' => $sender,
            'receiver_id' => $receiver,
            'status' => '0',
            'time' => $time
        );

        $this->db->insert('messages', $message);

    }

    public function mark_as_read($message_id)
    {
        $data = array('status' => 1);
        $this->db->where('id', $message_id);
        $this->db->update('messages', $data);
    }

    public function count_unread_messages($receiver_id)
    {
        $this->db->select('status');
        $this->db->from('messages');
        $this->db->where('receiver_id', $receiver_id);
        return $this->db->count_all_results();
    }

    public function get_messages($user_id, $received) //$received = true or false
    {
        $statement = array();
        if ($received == true) {
            $statement['receiver_id'] = $user_id;
        } else {
            $statement['sender_id'] = $user_id;
        }
        $query = $this->db->get_where('messages', $statement);
        return $query->result_array();
    }
}