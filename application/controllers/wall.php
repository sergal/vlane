<?php
class Wall extends Base_Controller
{
	public function create(){
		$this->load->model('Wall_model');
        $this->load->library('session');
		$text = $this->input->post('wall_msg_body');
		$user_id = $this->session->userdata('user_id');
		$result = $this->Wall_model->to_wall($user_id, $text);
		$element = (count($result))-1;
		$arr = array();
		for($i=0; $i<=$element; $i++){
			$arr[$i] = $result['id'+$i];
		}
		$max = (max($arr));
		echo $max['id'];
	}
	public function delete(){
		$this->load->model('Wall_model');
        $this->load->library('session');
		$mid = $this->input->post('mid');
		$user_id = $this->session->userdata('user_id');
		$this->Wall_model->delete_from_wall($user_id, $mid);
	}
	public function clear_wall(){
		$this->load->model('Wall_model');
        $this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->Wall_model->clear_wall($user_id);
	}
}