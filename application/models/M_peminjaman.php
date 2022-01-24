<?php

class M_peminjaman extends CI_Model
{
	private $_table = "peminjaman";
	private $_table2 = "pengembalian";
	private $_table3 = "buku";
	private $_table4 = "anggota";
	private $_table5 = "petugas";
		


	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
		$this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
		$query = $this->db->get();
		return $query;
	}

	public function search_blog($kode_buku){
        $this->db->like('kode_buku', $kode_buku , 'id_buku');
        $this->db->order_by('id_buku', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->_table3)->result();
    }

    public function search_blog1($kode_anggota){
        $this->db->like('kode_anggota', $kode_anggota , 'nama_anggota');
        $this->db->order_by('id_anggota', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->_table4)->result();
    }

    public function search_blog2($nama_petugas){
        $this->db->like('nama_petugas', $nama_petugas, 'id_petugas');
        $this->db->order_by('id_petugas', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->_table5)->result();
    }
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_peminjaman" => $id])->row();
	}

	public function getAll_Jabatan()
	{
		return $this->db->get($this->_table2)->result();
	}

	public function save($data = array())
	{
		return $this->db->insert($this->_table,$data);
		
	}
	public function save2($data2 = array())
	{
		return $this->db->insert($this->_table2,$data2);
	}
	public function update($data = array())
	{
		$id = $this->input->post('id_peminjaman');
		return $this->db->update($this->_table, $data, array('id_peminjaman' => $id));	
	} 

	public function delete($id)
	{
		
		$this->db->delete($this->_table, array("id_peminjaman" => $id));

	}
}
?>