<?php
class Kas_model extends CI_Model
{
	public function getSetor($tgl_1, $tgl_2)
	{
		$query = $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' and tgl BETWEEN '$tgl_1' AND '$tgl_2'");
		return $query->row_array();
	}

	public function getTarik($tgl_1, $tgl_2)
	{
		$query = $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' and tgl BETWEEN '$tgl_1' AND '$tgl_2'");
		return $query->row_array();
	}
}
