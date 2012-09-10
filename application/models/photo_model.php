<?php
class Photo_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_photo($id) //id in user table
    {
        $this->db->from('users');
        $this->db->where('id', $id);
        $photo = $this->db->get();
        return $photo;
    }

    public function add_photo($photo_name, $id)
    {
        $this->db->select('photo');
        $this->db->from('users');
        $this->db->where('id', $id);
        $first_photo = $this->db->get();

        $photo = array('photo' => $photo_name);
        $this->db->where('id', $id);
        $this->db->update('users', $photo);

        $this->db->select('photo');
        $this->db->from('users');
        $this->db->where('id', $id);
        $last_photo = $this->db->get();
        if ($first_photo != $last_photo) {
            return true;
        } else return false;
    }
}