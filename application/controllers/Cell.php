<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cell extends CI_Controller {

	public function index($id,$label)
	{
		$get = $this->db->get_where('cell', array('id_cell' => $id))->row();		
		if ($get->status == "0") {
			$data['show'] = '
				<button type="button" class="btn btn-danger btn-cell">Cell '.$label.'</button>
			';
		}else{
			$data['show'] = '
				<button type="button" class="btn btn-primary btn-cell">Cell '.$label.'</button>
			';
		}

		$this->load->view('cell', $data);
	}

	public function dashboard($id,$label)
	{
		$get = $this->db->get_where('cell', array('id_cell' => $id))->row();		
		if ($get->status == "0") {
			$data['show'] = '<button type="button" class="btn btn-danger" style="width:100%;">Cell<br>'.$label.'</button>';
		}else{
			$data['show'] = '<button type="button" class="btn btn-primary" style="width:100%;">Cell<br>'.$label.'</button>';
		}

		$this->load->view('cell', $data);
	}


}

/* End of file Cell.php */
/* Location: ./application/controllers/Cell.php */