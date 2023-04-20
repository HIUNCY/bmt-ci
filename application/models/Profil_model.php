<?php
class Profil_model extends CI_Model
{
	public function getProfil()
	{
		$query = $this->db->get('tb_profil');
		return $query->row_array();
	}

	public function updateProfil($id, $data)
	{
		$this->db->where('id_profil', $id);
		$this->db->update('tb_profil', $data);
	}
}
