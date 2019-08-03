<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {

	public function index()
	{
		$data['mod1'] = $this->db->get_where('cell', array('id_modul' => '1'))->result();
		$data['mod2'] = $this->db->get_where('cell', array('id_modul' => '2'))->result();
		$data['mod3'] = $this->db->get_where('cell', array('id_modul' => '3'))->result();
		$data['mod4'] = $this->db->get_where('cell', array('id_modul' => '4'))->result();
		$data['mod5'] = $this->db->get_where('cell', array('id_modul' => '5'))->result();
		$data['content'] = 'admin/modul';
		$this->load->view('admin/index', $data);		
	}

}

/* End of file Modul.php */
/* Location: ./application/controllers/admin/Modul.php */