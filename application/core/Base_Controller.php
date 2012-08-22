<?php
class Base_Controller extends CI_Controller
{

    public function set_header()
    {
        $this->load->library('session');
        $this->load->model('Message_model');
        if ($this->session->userdata('user_id') != null) {
            $messages = $this->Message_model->count_unread_messages($this->session->userdata('user_id'));
            $data['messages'] = $messages;
        }
        $data['user_id'] = $this->session->userdata('user_id');
        $this->load->view('header', $data);

    }
}