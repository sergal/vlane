<?php
class Message_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function send_message($text, $server, $reciver)
    {
        $data = array(
            'text' => '$text',
            'server' => '$server',
            'reciver' => '$reciver'
        );

        $this->db->insert('mytable', $data);

    }