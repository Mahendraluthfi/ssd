<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->auth->is_logged_in() == false){ 			       
        	$this->load->view('login');
        }else{
            redirect('admin/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$user = $this->input->post('user');
		$pass = md5($this->input->post('password'));

		$cek = $this->db->get_where('user', array('username' => $user, 'password' => $pass))->num_rows();
		if (empty($cek)) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">                      
                      <strong>Username or Password is Wrong !</strong>
                    </div>');
			redirect('admin/login','refresh');
		}else{
			$array = array(
				'admin' => $user,
				'password' => $pass
			);
			
			$this->session->set_userdata( $array );
			redirect('admin/dashboard','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('password');
		redirect('admin/login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */