<?php

class Bekasi_m extends CI_Model
{
	public function __construct()
    {
    	parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

	public function get($id_stasiun, $waktu)
	{
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		$query = $this->db->get('aqm_data');
		return $query->result();
	}

	public function add_aqmdata()
	{
		$data = array(
			'id_stasiun' 		=> $this->input->post('id_stasiun'),
			'waktu' 			=> $this->input->post('waktu'),
			'pm10' 				=> $this->input->post('pm10'),
			'pm25' 				=> $this->input->post('pm25'),
			'so2' 				=> $this->input->post('so2'),
			'co' 				=> $this->input->post('co'),
			'o3' 				=> $this->input->post('o3'),
			'no2' 				=> $this->input->post('no2'),
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

	public function update_aqmdata($id_stasiun, $waktu)
	{
		$data = array(
			'xtimetimes' => date("Y-m-d H:i:s")
		);
		$this->db->where('id_stasiun', $id_stasiun);
        $this->db->where('waktu', $waktu);
		return $this->db->update('aqm_data', $data);
	}
}