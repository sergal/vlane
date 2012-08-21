<?php
class Users extends CI_Controller
{
    public function show($id)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["user"] = $this->User_model->get_user($id);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }
}