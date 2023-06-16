<?php
class Penarikan_model extends CI_Model
{
	public function getPenarikan()
	{
		$query = $this->db->query("SELECT SUM(tarik) as total  from tb_tabungan where jenis='TR'");
		return $query->row_array();
	}

	public function getDataTarik()
	{
		$query = $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='TR' order by tgl desc, id_tabungan desc");
		return $query->result_array();
	}

	public function getSiswa()
	{
		$query = $this->db->get_where('tb_siswa', ['status' => 'Aktif']);
		return $query->result_array();
	}

	public function insertPenarikan($data)
	{
		$this->db->insert('tb_tabungan', $data);
	}

	public function getDataPenarikan($id)
	{
		$query = $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='TR' and id_tabungan='" . $id . "'");
		return $query->row_array();
	}

	public function getDataSiswa()
	{
		$query = $this->db->get('tb_siswa');
		return $query->result_array();
	}

	public function updatePenarikan($id, $data)
	{
		$this->db->where('id_tabungan', $id);
		$this->db->update('tb_tabungan', $data);
	}

	public function getJumlahSetor($nis)
	{
		$query = $this->db->query("SELECT SUM(setor) AS Tsetor FROM tb_tabungan WHERE jenis='ST' AND nis=$nis");
		return $query->row_array();
	}

	public function getJumlahTarik($nis)
	{
		$query = $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis");
		return $query->row_array();
	}
}
