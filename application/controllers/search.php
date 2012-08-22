<?php
class Search extends CI_Controller
{

public function open()
{
    $this->load->view("header");
    $this->load->view("users/search");
    $this->load->view("footer.php");
}

public function process()
{
    $this->load->model("Search_model");
    $data["result"] = $this->Search_model->search_name($this->input->post("txt"));
    $this->load->view("header");
    $this->load->view("users/search_result", $data);
    $this->load->view("footer.php");
}
}