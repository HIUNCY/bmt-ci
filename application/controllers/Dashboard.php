<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		if ($this->session->userdata('level') == 'siswa') {
			$nis = $this->session->userdata('nis');
			$dataSiswa = [
				'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' AND nis=$nis")->row_array(),
				'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis")->row_array(),
				'profil' => $this->db->get("tb_profil")->row_array()
			];
			$this->load->view('home/homeSiswa', $dataSiswa);
		} else {
			$dataAdmin = [
				'siswa' => $this->db->query("SELECT count(nis) as aktif from tb_siswa where status='Aktif'")->row_array(),
				'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST'")->row_array(),
				'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR'")->row_array(),
				'profil' => $this->db->get("tb_profil")->row_array()
			];
			$this->load->view('home/homeAdmin', $dataAdmin);
		}
		$this->load->view('templates/footer');
	}
}
