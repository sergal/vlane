<?php
class Base_Controller extends CI_Controller {
    public function set_header(){
        $this->load->helper('cookie');
        if($this->input->cookie('ci_session')!=false){

        }
    }
}