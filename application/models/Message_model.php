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
}