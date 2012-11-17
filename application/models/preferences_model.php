<?php
	class Preferences_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
			parent::__construct();
		}
		public function set_pref($prefs, $uid)
		{
			$types = array();
			$values = array();
			$i = 0;
			foreach($prefs as $key => $value){
				$types[$i++] = $index;
				$values[$i++] = $value;
			}
			return $types.$values;
		}
		public function get_pref($uid)
		{
			$result = $this->db->get_where("users", array('id' => $uid));
			return $result->result_array();
		}
		public function pass_change($uid, $pass)
		{
			$query = "UPDATE users SET 'password' = '$pass' WHERE 'id' = $uid";
			$this->db->query($query);
		}
	}
			