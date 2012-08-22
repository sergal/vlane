<?php

class Test extends CI_Controller
{
    public function count_unread_messages($user_id)
    {
        $this->load->model("Message_model");
        $count = $this->Message_model->count_unread_messages($user_id);
        echo $count;
    }

    public function mark_as_read($message_id)
    {
        $this->load->model("Message_model");
        $this->Message_model->mark_as_read($message_id);
    }

    public function get_messages($user_id, $received)
    {
        $this->load->model("Message_model");
        $this->Message_model->get_messages($user_id, $received);
    }
}

?>