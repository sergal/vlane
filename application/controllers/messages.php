<?php
class Messages extends Base_Controller
{
    public function show(){
        $this->set_header(2);
        $this->load->model('Message_model');
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $messages = $this->Message_model->get_messages($user_id, true);
        $data['messages'] = $messages;
        foreach ($messages as $value){
            $this->Message_model->mark_as_read($value['id']);
        }
        $this->load->view('messages/show', $data);
    }
    public function create($user_id)
    {
        $this->set_header(2);
        $this->load->model("User_model");
        $data["user"] = $this->User_model->get_user($user_id);
        $this->load->view("messages/create", $data);
        $this->load->view("footer");
    }

    public function send(){
        $this->load->helper('url');
        $this->load->model('Message_model');
        $this->load->library('session');
		$receiver = $this->input->post('rid');
        $text = $this->input->post('msg_body');
        $user_id = $this->session->userdata('user_id');
        $this->Message_model->send_message($text, $user_id, $receiver);
        redirect("messages/show");
    }
}