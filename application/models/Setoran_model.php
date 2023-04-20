<?php
class Setoran_model extends CI_Model
{
	public function getSetoran()
	{
		$query = $this->db->query("SELECT SUM(setor) as total  from tb_tabungan where jenis='ST'");
		return $query->row_array();
	}

	public function getDataSetor()
	{
		$query = $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='ST' order by tgl desc, id_tabungan desc");
		return $query->result_array();
	}

	public function getSiswa()
	{
		$query = $this->db->get_where('tb_siswa', ['status' => 'Aktif']);
		return $query->result_array();
	}

	public function insertSetoran($data)
	{
		$this->db->insert('tb_tabungan', $data);
	}

	public function getDataSetoran($id)
	{
		$query = $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='ST' and id_tabungan='" . $id . "'");
		return $query->row_array();
	}

	public function getDataSiswa()
	{
		$query = $this->db->get('tb_siswa');
		return $query->result_array();
	}

	public function updateSetoran($id, $data)
	{
		$this->db->where('id_tabungan', $id);
		$this->db->update('tb_tabungan', $data);
	}
}
