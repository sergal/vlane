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

    public function school($name_school)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["school"] = $this->User_model->get_by_school($name_school);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }

    public function city($city)
    {
        $this->load->view("header");
        $this->load->model("User_model");
        $data["city"] = $this->User_model->get_by_city($city);
        $this->load->view("users/show", $data);
        $this->load->view("footer");
    }
    public function group($group){
        $this->load->view("header");
        $this->load->model("User_model");
        $data["group"] = $this->User_model->get_by_group($group);
        $data["group_name"] = $this->Group_model->get_group($group);
        $this->load->view("users/group", $data);
        $this->load->view("footer");
    }





}