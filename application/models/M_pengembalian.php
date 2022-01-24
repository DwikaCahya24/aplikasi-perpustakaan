<?php

class M_pengembalian extends CI_Model
{
	private $_table = "peminjaman";
	private $_table2 = "pengembalian";
	private $_table3 = "buku";
	private $_table4 = "anggota";
	private $_table5 = "petugas";

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->_table2);
		$this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
		$this->db->join('anggota', 'anggota.id_anggota = pengembalian.id_anggota');
		$query = $this->db->get();
		return $query;
	}

	public function getById($id)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
		$this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
		
		return $this->db->get_where($this->_table2, ["id_peminjaman" => $id])->row();
		
		
	}

	public function getAll_Jabatan()
	{
		return $this->db->get($this->_table2)->result();
	}

	public function save($data = array())
	{
		return $this->db->insert($this->_table2,$data);
	}
	public function update($data = array())
	{
		$id = $this->input->post('id_pengembalian');
		return $this->db->update($this->_table2, $data, array('id_pengembalian' => $id));	
	} 

	public function delete($id)
	{
		
		$this->db->delete($this->_table, array("id_pengembalian" => $id));

	}
}
?>