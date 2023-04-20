<?php
class Siswa_model extends CI_Model
{
	public function getSiswa()
	{
		$query = $this->db->query("SELECT s.nis, s.nama_siswa, s.jekel, s.status, s.th_masuk, k.kelas 
		FROM tb_siswa s INNER JOIN tb_kelas k on s.id_kelas=k.id_kelas ORDER BY kelas ASC, nis ASC");
		return $query->result_array();
	}

	public function getKelas()
	{
		$query = $this->db->get("tb_kelas");
		return $query->result_array();
	}
	public function getDataSiswa($nis)
	{
		$query = $this->db->get_where('tb_siswa', ['nis' => $nis]);
		return $query->row_array();
	}

	public function insertSiswa($data)
	{
		$this->db->insert('tb_siswa', $data);
	}

	public function updateSiswa($nis, $data)
	{
		$this->db->where('nis', $nis);
		$this->db->update('tb_siswa', $data);
	}

	public function deleteSiswa($nis)
	{
		$this->db->delete('tb_siswa', ['nis' => $nis]);
	}
}
