<?php

class M_buku extends CI_Model
{
	private $_table = "buku";
	


	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$query = $this->db->get();
		return $query;
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_buku" => $id])->row();
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
		$id = $this->input->post('id_buku');
		return $this->db->update($this->_table, $data, array('id_buku' => $id));	
	} 

	public function delete($id)
	{
		
		$this->db->delete($this->_table, array("id_buku" => $id));

	}
}
?>