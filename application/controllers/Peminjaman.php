<?php if (! defined('BASEPATH')) exit('No direct script acces allowed');

/**
 * 
 */
class Peminjaman extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("M_peminjaman");
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
	function get_autocomplete1(){
		if (isset($_GET['term'])) {
		  	$result = $this->M_peminjaman->search_blog1($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> 'ID Anggota : '.$row->id_anggota.' -- Nama Anggota : '.$row->nama_anggota,
					'des'			=> $row->id_anggota,
					
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}
	function get_autocomplete2(){
		if (isset($_GET['term'])) {
		  	$result = $this->M_peminjaman->search_blog2($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> 'ID Petugas : '.$row->id_petugas.' -- Nama Petugas : '.$row->nama_petugas,
					'des'			=> $row->id_petugas,
					
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

	public function index()
	{
		$data['list_peminjaman'] = $this->M_peminjaman->getAll();

		$data['content'] = 'v_peminjaman';

		$this->load->view('v_utama',$data);
	}

	public function open_form($id='')
	{
		$data["row"] = $this->M_peminjaman->getById($id);
		$data["content"] = 'v_peminjaman_form';

		$this->load->view('v_utama',$data);
	}

	public function save()
	{
		$id = $this->input->post('id_peminjaman');
			$data = array(
				'id_peminjaman' => $this->input->post('id_peminjaman'),
				'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				'tanggal_kembali' => $this->input->post('tanggal_kembali'),
				'id_buku' => $this->input->post('id_buku'),
				'id_anggota' => $this->input->post('id_anggota'),
				'id_petugas' => $this->input->post('id_petugas'),
			);
			$data2 = array(
				'id_pengembalian' => $this->input->post('id_peminjaman'),
				
				'tanggal_pengembalian' => $this->input->post('tanggal_kembali'),
				'denda' => 0,
				'id_buku' => $this->input->post('id_buku'),
				'id_anggota' => $this->input->post('id_anggota'),
				'id_petugas' => $this->input->post('id_petugas'),
			);


		if($id==''){
			$this->M_peminjaman->save($data);
			$this->M_peminjaman->save2($data2);
			$this->session->set_flashdata('success', 'Peminjaman berhasil ditambahkan');
			redirect('peminjaman');
		} else {
			$this->M_peminjaman->update($data);
			$this->session->set_flashdata('success', 'Peminjaman berhasil diedit');
			redirect('peminjaman');
		}
	}

	public function delete($id)
	{
		$this->M_peminjaman->delete($id);
		$this->session->set_flashdata('success', 'Peminjaman berhasil dihapus');
		redirect('peminjaman');
	}
}