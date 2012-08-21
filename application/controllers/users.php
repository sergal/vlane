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

    public function group($id_group)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["group"] = $this->User_model->get_group($id_group);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }

    public function city($id_city)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["city"] = $this->User_model->get_city($id_city);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }
}