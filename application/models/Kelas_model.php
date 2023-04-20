<?php
class Kelas_model extends CI_Model
{
	public function getKelas()
	{
		$query = $this->db->get("tb_kelas");
		return $query->result_array();
	}

	public function insertKelas($data)
	{
		$this->db->insert('tb_kelas', $data);
	}

	public function getDataKelas($id)
	{
		$query = $this->db->get_where('tb_kelas', ['id_kelas' => $id]);
		return $query->row_array();
	}

	public function updateKelas($id, $data)
	{
		$this->db->where('id_kelas', $id);
		$this->db->update('tb_kelas', $data);
	}

	public function deleteKelas($id)
	{
		$this->db->delete('tb_kelas', ['id_kelas' => $id]);
	}
}
