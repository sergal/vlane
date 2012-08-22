<?php
class Season_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function get_season($id)
    {
        $season = $this->db->get_where('seasons', array('id' => $id));
        return $season->row_array();
    }

    public function get_by_year($year)
    {
        $season = $this->db->get_where('seasons', array('year' => $year));
        return $season->row_array();
    }

    public function get_by_type($type)
    {
        $season = $this->db->get_where('seasons', array('type' => $type));
        return $season->row_array();
    }

    public function get_all_seasons()
    {
        $this->db->from("seasons");
        $this->db->order_by('year', 'desc');
        $seasons = $this->db->get();
        return $seasons->result_array();
    }
}

?>