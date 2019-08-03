<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cell extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('admin/login');
	    }

	    $this->load->model('Mcell');
	}

	public function index($id)
	{
		if (empty($this->input->post('date'))) {
			$date = date('Y-m-d');
		}else{
			$date = $this->input->post('date');
		}

		$data['fto'] = $this->Mcell->fto($id,$date)->row();
		$data['lto'] = $this->Mcell->lto($id,$date)->row();
		$data['fgt'] = $this->db->query("SELECT MIN(diff) as min FROM log WHERE id_cell='$id' AND date='$date'")->row();
		$data['sgt'] = $this->db->query("SELECT MAX(diff) as max FROM log WHERE id_cell='$id' AND date='$date'")->row();
		$total = $this->db->query("SELECT SUM(diff) as total FROM log WHERE id_cell='$id' AND date='$date'")->row();
		$data['total'] = $this->waktu($total->total);
		$data['log'] = $this->Mcell->log($id,$date)->result();
		$data['cell'] = $this->Mcell->get($id)->row();
		$data['id'] = $id;
		$data['date'] = $date;
		$data['content'] = 'admin/cell';
		$this->load->view('admin/index', $data);		
	}
	


	function waktu($waktu){
	    if(($waktu>0) and ($waktu<60)){
	        $lama=number_format($waktu)." seconds";
	        return $lama;
	    }
	    if(($waktu>60) and ($waktu<3600)){
	        $detik=fmod($waktu,60);
	        $menit=$waktu-$detik;
	        $menit=$menit/60;
	        $lama=$menit." Minutes ".number_format($detik)." seconds";
	        return $lama;
	    }
	    elseif($waktu >3600){
	        $detik=fmod($waktu,60);
	        $tempmenit=($waktu-$detik)/60;
	        $menit=fmod($tempmenit,60);
	        $jam=($tempmenit-$menit)/60;    
	        $lama=$jam." Hours ".$menit." Minutes ".number_format($detik)." seconds";
	        return $lama;
    	}
	}

}

/* End of file Cell.php */
/* Location: ./application/controllers/admin/Cell.php */