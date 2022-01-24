<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Pengembalian extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_pengembalian");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['list_pengembalian'] = $this->M_pengembalian->getAll();

		$data['content'] = 'v_pengembalian';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_pengembalian->getById($id);
		$data["content"] = 'v_pengembalian_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_pengembalian');
			$data = array(
				'id_pengembalian' => $this->input->post('id_pengembalian'),
				'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
				'id_buku' => $this->input->post('id_buku'),
				'denda' => 0,
				'id_anggota' => $this->input->post('id_anggota'),
				'id_petugas' => $this->input->post('id_petugas'),
				'tgl_kembali' => $this->input->post('tgl_kembali'),
				'ket' => 'Dikembalikan',
			);

		if($id==''){
			$this->M_pengembalian->save($data);
			$this->session->set_flashdata('success', 'Pengembalian berhasil ditambahkan');
			redirect('pengembalian');
		} else {
			$this->M_pengembalian->update($data);
			$this->session->set_flashdata('success', 'Pengembalian berhasil ');
			redirect('pengembalian');
		}
	}

	public function delete($id)
	{
		$this->M_pengembalian->delete($id);
		$this->session->set_flashdata('success', 'Pengembalian berhasil dihapus');
		redirect('pengembalian');
	}
}