<?php

class Sukoharjo_m extends CI_Model
{
	public function __construct()
    {
    	parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

	public function get_rumdata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_RUM');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_gupitdata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_GUPIT');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_plesandata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_PLESAN');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_rumcemsdata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'CEMS_RUM');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_cems($id_stasiun, $waktu)
	{
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		$query = $this->db->get('aqm_data');
		return $query->result();
	}

	public function get_cams($id_stasiun, $waktu)
	{
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		$query = $this->db->get('aqm_data');
		return $query->result();
	}

	public function add_camsdata()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> $this->input->post('id_stasiun'),
			'waktu' 			=> $this->input->post('waktu'),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'ws' 				=> $this->input->post('ws'),
			'wd' 				=> $this->input->post('wd'),
			'humidity' 			=> $this->input->post('humidity'),
			'temperature' 		=> $this->input->post('temperature'),
			'pressure' 			=> $this->input->post('pressure'),
			'sr' 				=> $this->input->post('sr'),
			'rain_intensity' 	=> $this->input->post('rain_intensity')
		);
		return $this->db->insert('aqm_data', $data);
	}

	public function update_camsdata($id_stasiun, $waktu)
	{
		$data = array(
			'xtimetimes' => date("Y-m-d H:i:s")
		);
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		return $this->db->update('aqm_data', $data);
	}

	public function add_cemsdata()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> 'CEMS_RUM',
			'waktu' 			=> $this->input->post('waktu'),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'ws' 				=> $this->input->post('velocity'),
			'temperature' 		=> $this->input->post('temperature')
		);
		return $this->db->insert('aqm_data', $data);
	}

	public function update_cemsdata($id_stasiun, $waktu)
	{
		$data = array(
			'xtimetimes' => date("Y-m-d H:i:s")
		);
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		return $this->db->update('aqm_data', $data);
	}
}