<?php
class Pengguna_model extends CI_Model
{
	public function getDataPengguna()
	{
		$query = $this->db->get('tb_pengguna');
		return $query->result_array();
	}

	public function insertPengguna($data)
	{
		$this->db->insert('tb_pengguna', $data);
	}

	public function getPengguna($id)
	{
		$query = $this->db->get_where('tb_pengguna', ['id_pengguna' => $id]);
		return $query->row_array();
	}

	public function updatePengguna($id, $data)
	{
		$this->db->where('id_pengguna', $id);
		$this->db->update('tb_pengguna', $data);
	}

	public function deletePengguna($id)
	{
		$this->db->delete('tb_pengguna', ['id_pengguna' => $id]);
	}
}
