<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Rak extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_rak");
		$this->load->library('form_validation');
	}
	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->M_peminjaman->search_blog($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> 'ID Buku : '.$row->id_buku.' -- Kode Buku : '.$row->kode_buku.' -- Judul Buku : '.$row->judul_buku,
					'des'			=> $row->id_buku,
					
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}
	public function index()
	{
		$data['list_rak'] = $this->M_rak->getAll();

		$data['content'] = 'v_rak';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_rak->getById($id);
		$data["content"] = 'v_rak_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_rak');
			$data = array(
				'id_rak' => $this->input->post('id_rak'),
				'nama_rak' => $this->input->post('nama_rak'),
				'lokasi_rak' => $this->input->post('lokasi_rak'),
				'id_buku' => $this->input->post('id_buku'),
				
			);

		if($id==''){
			$this->M_rak->save($data);
			$this->session->set_flashdata('success', 'Rak berhasil ditambahkan');
			redirect('rak');
		} else {
			$this->M_rak->update($data);
			$this->session->set_flashdata('success', 'Rak berhasil diedit');
			redirect('rak');
		}
	}

	public function delete($id)
	{
		$this->M_rak->delete($id);
		$this->session->set_flashdata('success', 'Rak berhasil dihapus');
		redirect('rak');
	}
}