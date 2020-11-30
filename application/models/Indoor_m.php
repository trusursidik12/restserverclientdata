<?php

class Indoor_m extends CI_Model
{
	public function __construct()
    {
    	parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

	public function get_data($id_stasiun)
	{
		$this->db->where('id_stasiun', $id_stasiun);
		$this->db->order_by('waktu', 'DESC');
		$this->db->limit('1');
		$query = $this->db->get('aqm_data');
		return $query->result_array();
    }
    
    public function get_ispu($id_stasiun)
	{
		$this->db->where('id_stasiun', $id_stasiun);
		$this->db->order_by('waktu', 'DESC');
		$this->db->limit('1');
		$query = $this->db->get('aqm_ispu');
		return $query->result_array();
	}
}