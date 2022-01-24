<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
 	public function index()
	{
		

		$data['content'] = 'v_login';

		$this->load->view('v_utama2',$data);
	}
	
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){
 		$akses = 'akses';
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				);
 
			$this->session->set_userdata($data_session);
		 		if($akses== 'admin'){
		 			redirect('buku');	
		 		}else {
		 			redirect('anggota');
		 		}
			
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}