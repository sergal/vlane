<?php
class Invites_model extends CI_Model {
    public function __construct(){
        $this->load->database();
        parent::__construct();
    }

    public function get_token_by_user($id){
        $row = $this->db->get_where('tokens', array('id' => $id));
        return $row->row_array();
    }
    public function token_used($token){
        $row = $this->db->delete('tokens', array('token' => $token));
        return $row;
    }
}