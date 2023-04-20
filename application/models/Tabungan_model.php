<?php
class Tabungan_model extends CI_Model
{
	public function getDataSiswa()
	{
		$query = $this->db->get_where('tb_siswa', ['status' => 'Aktif']);
		return $query->result_array();
	}

	public function getSetor($nis)
	{
		$query = $this->db->query("SELECT SUM(setor) AS Tsetor FROM tb_tabungan WHERE jenis='ST' AND nis=$nis");
		return $query->row_array();
	}

	public function getTarik($nis)
	{
		$query = $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis");
		return $query->row_array();
	}

	public function getDataTabungan($nis)
	{
		$query = $this->db->query("SELECT s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas FROM tb_siswa s JOIN tb_tabungan t ON s.nis=t.nis WHERE s.nis =$nis ORDER BY tgl ASC");
		return $query->result_array();
	}

	public function getProfil()
	{
		$query = $this->db->get('tb_profil');
		return $query->row_array();
	}

	public function getDataSiswaCetak($nis)
	{
		$query = $this->db->get_where('tb_siswa', ['nis' => $nis]);
		return $query->row_array();
	}

	public function getDataCetak($nis)
	{
		$query = $this->db->query("SELECT s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas FROM tb_siswa s JOIN tb_tabungan t ON s.nis=t.nis WHERE s.nis =$nis ORDER BY tgl ASC");
		return $query->result_array();
	}
}
