<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Buku extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_buku");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['list_buku'] = $this->M_buku->getAll();

		$data['content'] = 'v_buku';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_buku->getById($id);
		$data["content"] = 'v_buku_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_buku');
			$data = array(
				'id_buku' => $this->input->post('id_buku'),
				'kode_buku' => $this->input->post('kode_buku'),
				'judul_buku' => $this->input->post('judul_buku'),
				'penulis_buku' => $this->input->post('penulis_buku'),
				'penerbit_buku' => $this->input->post('penerbit_buku'),
				'tahun_penerbit' => $this->input->post('tahun_penerbit'),
				'stok' => $this->input->post('stok'),
			);

		if($id==''){
			$this->M_buku->save($data);
			$this->session->set_flashdata('success', 'Buku berhasil ditambahkan');
			redirect('buku');
		} else {
			$this->M_buku->update($data);
			$this->session->set_flashdata('success', 'Buku berhasil diedit');
			redirect('buku');
		}
	}

	public function delete($id)
	{
		$this->M_buku->delete($id);
		$this->session->set_flashdata('success', 'Buku berhasil dihapus');
		redirect('buku');
	}
}