<?php

class Test extends CI_Controller
{
    public function count_unread_messages($user_id)
    {
        $this->load->model("Message_model");
        $count = $this->Message_model->count_unread_messages($user_id);
        echo $count;
    }
}

?>