<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Petugas extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_petugas");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['list_petugas'] = $this->M_petugas->getAll();

		$data['content'] = 'v_petugas';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_petugas->getById($id);
		$data["content"] = 'v_petugas_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_petugas');
			$data = array(
				'id_petugas' => $this->input->post('id_petugas'),
				'nama_petugas' => $this->input->post('nama_petugas'),
				'jabatan_petugas' => $this->input->post('jabatan_petugas'),
				'no_telp_petugas' => $this->input->post('no_telp_petugas'),
				'alamat_petugas' => $this->input->post('alamat_petugas'),
				
			);

		if($id==''){
			$this->M_petugas->save($data);
			$this->session->set_flashdata('success', 'Petugas berhasil ditambahkan');
			redirect('petugas');
		} else {
			$this->M_petugas->update($data);
			$this->session->set_flashdata('success', 'Petugas berhasil diedit');
			redirect('petugas');
		}
	}

	public function delete($id)
	{
		$this->M_petugas->delete($id);
		$this->session->set_flashdata('success', 'Petugas berhasil dihapus');
		redirect('petugas');
	}
}