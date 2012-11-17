<?php
class Wall_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
	public function get_wall($id){
		$row = $this->db->get_where('wall', array('uid' => $id));
        return $row->result_array();
	}
	public function to_wall($uid, $message){
		date_default_timezone_set('Asia/Omsk');
        $time = date('Y-m-d H:i:s');
        $message = array(
            'body' => $message,
			'time' => $time,
            'uid' => $uid
            
        );
        $this->db->insert('wall', $message);
		$query = $this->db->get_where('wall', array('uid' => $uid));
		return $query->result_array();
	}
	public function delete_from_wall($uid, $mid){
		$this->db->delete('wall', array('id' => $mid));
	}
	public function clear_wall($uid){
		$this->db->delete('wall', array('uid'=> $uid));
	}
}