<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Utama extends CI_Controller
{
	
	
	public function index()
	{
		$data['content'] = 'v_beranda';

		$this->load->view('v_utama', $data);
	}
}