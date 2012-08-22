<?php
class Search extends Base_Controller
{

public function process()
{
    $this->load->model("Search_model");
    $data["result"] = $this->Search_model->search_name($this->input->post("txt"));
    $i = 0; //можете лучше - перепишите!
    foreach ($data["result"] as $num)
    {
        $data["group"][$i] = $this->Search_model->search_group($num["id"]);
        $i++;
    }
    $this->set_header();
    $this->load->view("users/search_result", $data);
    $this->load->view("footer.php");
}
}