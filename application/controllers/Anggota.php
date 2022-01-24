<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Anggota extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_anggota");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['list_anggota'] = $this->M_anggota->getAll();

		$data['content'] = 'v_anggota';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_anggota->getById($id);
		$data["content"] = 'v_anggota_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_anggota');
			$data = array(
				'id_anggota' => $this->input->post('id_anggota'),
				'kode_anggota' => $this->input->post('kode_anggota'),
				'nama_anggota' => $this->input->post('nama_anggota'),
				'jk_anggota' => $this->input->post('jk_anggota'),
				'jurusan_anggota' => $this->input->post('jurusan_anggota'),
				'no_telp_anggota' => $this->input->post('no_telp_anggota'),
				'alamat_anggota' => $this->input->post('alamat_anggota'),
			);

		if($id==''){
			$this->M_anggota->save($data);
			$this->session->set_flashdata('success', 'Anggota berhasil ditambahkan');
			redirect('anggota');
		} else {
			$this->M_anggota->update($data);
			$this->session->set_flashdata('success', 'Anggota berhasil diedit');
			redirect('anggota');
		}
	}

	public function delete($id)
	{
		$this->M_anggota->delete($id);
		$this->session->set_flashdata('success', 'Anggota berhasil dihapus');
		redirect('anggota');
	}
}