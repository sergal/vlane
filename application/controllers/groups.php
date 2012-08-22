<?php
class Groups extends Base_Controller
{
    public function show()
    {
        $this->load->model("Season_model");
        $data["seasons"] = $this->Season_model->get_all_seasons();
        $this->set_header(1);
        $this->load->view("groups/show", $data);
        $this->load->view("footer");
    }

    public function season($id)
    {
        $this->load->model("Group_model");
        $data = array();
        $data["groups"] = $this->Group_model->get_groups($id);
        $this->set_header(1);
        $this->load->view("users/groups", $data);
        $this->load->view("footer");
    }
}