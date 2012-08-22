<?php
class Search extends CI_Controller
{
  public function show()
  {
    $this->load->model("Group_model");
    $data = array();
    $data["groups"] -> $this->Group_model->get_groups(2012);
    $this->load->view("users/groups");
  }
}