<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/laporan');
		$this->load->view('templates/footer');
	}

	public function cetakLaporan()
	{
		$tgl_1 = $this->input->post('tgl_1');
		$tgl_2 = $this->input->post('tgl_2');
		$data = [
			'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' and tgl BETWEEN '$tgl_1' AND '$tgl_2'")->row_array(),
			'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' and tgl BETWEEN '$tgl_1' AND '$tgl_2'")->row_array(),
			'dataLaporan' => $this->db->query("SELECT * FROM tb_tabungan WHERE tgl BETWEEN '$tgl_1' AND '$tgl_2' order by tgl asc")
		];


		$this->load->view('templates/header');
		$this->load->view('laporan/cetakLaporan', $data);
	}
}
