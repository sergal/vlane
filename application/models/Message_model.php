<?php
class Message_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function send_message($text, $server, $receiver)
    {
        $time = time();
        $message = array(
            'text' => $text,
            'server_id' => $server,
            'receiver_id' => $receiver,
            'status' => '0',
            'time' => $time
        );

        $this->db->insert('messages', $message);

    }
}