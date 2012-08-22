<?php
class Messages extends Base_Controller
{
    public function create($user_id)
    {
        $this->set_header(2);
        $this->load->model("User_model");
        $data["user"] = $this->User_model->get_user($user_id);
        $this->load->view("messages/messages_create", $data);
        $this->load->view("footer");
    }
}