<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	public function index()
	{	
		// $get = $this->db->get('log')->result();
		// foreach ($get as $key) {
		// 	$in = date_create($key->time_in);
		// 	$out = date_create($key->time_out);
		// 	$diff = date_diff($in, $out);

		// 	$jam = $diff->h;
		// 	$menit = ($jam * 60) + $diff->i;
		// 	$total = ($menit * 60) + $diff->s;
		// 	echo $total.' detik<br>';
		// }
		$get = $this->db->query("SELECT SUM(diff) as total FROM log WHERE id_cell = '1' AND date = '2019-07-29'")->row();
		echo $this->waktu($get->total);
	}

	function waktu($waktu){
	    if(($waktu>0) and ($waktu<60)){
	        $lama=number_format($waktu)." detik";
	        return $lama;
	    }
	    if(($waktu>60) and ($waktu<3600)){
	        $detik=fmod($waktu,60);
	        $menit=$waktu-$detik;
	        $menit=$menit/60;
	        $lama=$menit." Menit ".number_format($detik)." detik";
	        return $lama;
	    }
	    elseif($waktu >3600){
	        $detik=fmod($waktu,60);
	        $tempmenit=($waktu-$detik)/60;
	        $menit=fmod($tempmenit,60);
	        $jam=($tempmenit-$menit)/60;    
	        $lama=$jam." Jam ".$menit." Menit ".number_format($detik)." detik";
	        return $lama;
    	}
	}

}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */