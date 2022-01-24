<?php

class M_rak extends CI_Model
{
	private $_table = "rak";
	private $_table3 = "buku";
	


	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$query = $this->db->get();
		return $query;
	}
	public function search_blog($kode_buku){
        $this->db->like('kode_buku', $kode_buku , 'id_buku');
        $this->db->order_by('id_buku', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->_table3)->result();
    }
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_rak" => $id])->row();
	}

	public function getAll_Jabatan()
	{
		return $this->db->get($this->_table2)->result();
	}

	public function save($data = array())
	{
		return $this->db->insert($this->_table,$data);
	}
	public function update($data = array())
	{
		$id = $this->input->post('id_rak');
		return $this->db->update($this->_table, $data, array('id_rak' => $id));	
	} 

	public function delete($id)
	{
		
		$this->db->delete($this->_table, array("id_rak" => $id));

	}
}
?>