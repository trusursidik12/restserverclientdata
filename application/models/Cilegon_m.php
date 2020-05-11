<?php

class Cilegon_m extends CI_Model
{

	public function get_pcidata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'CILEGON_PCI');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_pciispu($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'CILEGON_PCI');
			$this->db->limit('1');
			$query = $this->db->get('aqm_ispu');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_ispu', array('id' => $id));
		return $query->row_array();
	}

	public function get_simpangtigadata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'SIMPANG_TIGA');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_simpangtigaispu($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'SIMPANG_TIGA');
			$this->db->limit('1');
			$query = $this->db->get('aqm_ispu');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_ispu', array('id' => $id));
		return $query->row_array();
	}

	public function get_merakdata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'MERAK');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_merakispu($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'MERAK');
			$this->db->limit('1');
			$query = $this->db->get('aqm_ispu');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_ispu', array('id' => $id));
		return $query->row_array();
	}

	public function get_ciwandandata($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'CIWANDAN');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_ciwandanispu($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->where('id_stasiun', 'CIWANDAN');
			$this->db->limit('1');
			$query = $this->db->get('aqm_ispu');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_ispu', array('id' => $id));
		return $query->row_array();
	}

	public function add_aqmsdata()
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
			'voc' 				=> $this->input->post('voc'),
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
}