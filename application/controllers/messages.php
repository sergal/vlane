<?php
class Messages extends CI_Controller
{
    public function create($user_id)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["user"] = $this->User_model->get_user($user_id);
        $this->load->view("messages/create",$data);
        $this->load->view("footer");
    }

}