<?php

class Photo extends Base_Controller {

    public function index() {
        $this->load->library('session');
        $this->set_header();
        $this->load->view("photo/add_photo");
        $data['user_id'] = $this->session->userdata('user_id');
        $this->load->view("footer", $data);
    }

    public function add() {
        $config['upload_path'] = './web/img/';
        $config['encrypt_name'] = true;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $this->load->library('upload', $config);
        $this->load->library('session');
        $this->load->model('Photo_model');
        $this->load->model('User_model');
        $uid = $this->session->userdata('user_id');
        $photo_arr = $this->User_model->get_user($uid);
        $photo = $photo_arr['photo'];
        $this->load->helper('file');
        $this->load->helper('url');
        if (!$this->upload->do_upload()) {

            $this->load->view('photo');
        } else {
            if (file_exists('./web/img/' . $photo)) {
                unlink('./web/img/' . $photo);
            }
            $arr = $this->upload->data();
            $new = $arr['file_name'];
            $this->Photo_model->add_photo($new, $uid);
            redirect('users/show', 'location');
        }
    }

}