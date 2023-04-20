<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataSiswa' => $this->Tabungan_model->getDataSiswa(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/tabungan', $data);
		$this->load->view('templates/footer');
	}

	public function tabunganSiswa()
	{
		$nis = $this->session->userdata('nis');
		$data = [
			'setor' => $this->Tabungan_model->getSetor($nis),
			'tarik' => $this->Tabungan_model->getTarik($nis),
			'dataTabungan' => $this->Tabungan_model->getDataTabungan($nis),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/tabunganSiswa', $data);
		$this->load->view('templates/footer');
	}

	public function dataTabungan()
	{
		$nis = $this->input->post('nis');
		$data = [
			'setor' => $this->Tabungan_model->getSetor($nis),
			'tarik' => $this->Tabungan_model->getTarik($nis),
			'dataTabungan' => $this->Tabungan_model->getDataTabungan($nis),
		];
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/dataTabungan', $data);
		$this->load->view('templates/footer');
	}

	public function cetakTabungan()
	{
		$nis = $this->uri->segment(3);
		$data = [
			'dataSekolah' => $this->Tabungan_model->getProfil(),
			'dataSiswa' => $this->Tabungan_model->getDataSiswaCetak($nis),
			'dataCetak' => $this->Tabungan_model->getDataCetak($nis),
			'setor' => $this->Tabungan_model->getSetor($nis),
			'tarik' => $this->Tabungan_model->getTarik($nis),
		];

		$this->load->view('templates/header');
		$this->load->view('tabungan/cetakTabungan', $data);
	}
}
