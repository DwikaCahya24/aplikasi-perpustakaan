<?php

class M_anggota extends CI_Model
{
	private $_table = "anggota";
	


	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$query = $this->db->get();
		return $query;
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_anggota" => $id])->row();
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
		$id = $this->input->post('id_anggota');
		return $this->db->update($this->_table, $data, array('id_anggota' => $id));	
	} 

	public function delete($id)
	{
		
		$this->db->delete($this->_table, array("id_anggota" => $id));

	}
}
?>