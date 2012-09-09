<?php
class Photo extends Base_Controller
	{
		public function index(){
			$this->load->library('session');
			$this->set_header();
			$this->load->view("photo/add_photo");
			$data['user_id'] = $this->session->userdata('user_id');
			$this->load->view("footer", $data);
	}
		public function add(){
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model("Photo_model");
			$uid = $this->session->userdata('user_id');
			$photo = $this->Photo_model->get_photo($uid);
			unlink('http://vlane.net/web/img/'.$photo);
			if(count($_FILES)){
				if(!($_FILES['photo']['size'])){
					redirect('photo/add_photo', 'location');
				} else {
					$newname = 'http://vlane.net/img/'.md5(time().($_FILES['photo']['name']);
					move_uploaded_file($FILES['photo']['tmp_name'],$newname);
					$this->Photo_model->add_photo($newname,$uid);
					redirect('users/show', 'location');
				}
			}
		}
	}