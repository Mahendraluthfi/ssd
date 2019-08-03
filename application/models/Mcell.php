<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcell extends CI_Model {

	public function get($id)
		{
			$this->db->from('cell');
			$this->db->join('modul', 'modul.id_modul = cell.id_modul');
			$this->db->where('id_cell', $id);
			$db = $this->db->get();
			return $db;
		}	

	public function log($id,$date)
	{
		$this->db->from('log');
		$this->db->where('id_cell', $id);
		$this->db->where('date', $date);
		$this->db->order_by('id', 'desc');
		$db = $this->db->get();
		return $db;
	}
	
	public function fto($id,$date)
	{
		$getmin = $this->db->query("SELECT MIN(id) as min FROM log WHERE id_cell='$id' AND date='$date'")->row();
		$this->db->from('log');
		$this->db->where('id', $getmin->min);
		$db = $this->db->get();
		return $db;
	}

	public function lto($id,$date)
	{
		$getmax = $this->db->query("SELECT MAX(id) as max FROM log WHERE id_cell='$id' AND date='$date'")->row();
		$this->db->from('log');
		$this->db->where('id', $getmax->max);
		$db = $this->db->get();
		return $db;	
	}

}

/* End of file Mcell.php */
/* Location: ./application/models/Mcell.php */