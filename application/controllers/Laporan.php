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
			'setor' => $this->Laporan_model->getSetor($tgl_1, $tgl_2),
			'tarik' => $this->Laporan_model->getTarik($tgl_1, $tgl_2),
			'dataLaporan' => $this->Laporan_model->getDataLaporan($tgl_1, $tgl_2),
		];


		$this->load->view('templates/header');
		$this->load->view('laporan/cetakLaporan', $data);
	}
}
