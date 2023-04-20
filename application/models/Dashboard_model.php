<?php
class Dashboard_model extends CI_Model
{
	public function getSiswa()
	{
		$query = $this->db->query("SELECT count(nis) as aktif from tb_siswa where status='Aktif'");
		return $query->row_array();
	}

	public function getSetoran()
	{
		$query = $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST'");
		return $query->row_array();
	}

	public function getSetoranSiswa($nis)
	{
		$query = $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' AND nis=$nis");
		return $query->row_array();
	}

	public function getPenarikan()
	{
		$query = $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR'");
		return $query->row_array();
	}

	public function getPenarikanSiswa($nis)
	{
		$query = $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis");
		return $query->row_array();
	}

	public function getProfil()
	{
		$query = $this->db->get('tb_profil');
		return $query->row_array();
	}
}
