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
				'setor' => $this->Dashboard_model->getSetoranSiswa($nis),
				'tarik' => $this->Dashboard_model->getPenarikanSiswa($nis),
				'profil' => $this->Dashboard_model->getProfil(),
			];
			$this->load->view('home/homeSiswa', $dataSiswa);
		} else {
			$dataAdmin = [
				'siswa' => $this->Dashboard_model->getSiswa(),
				'setor' => $this->Dashboard_model->getSetoran(),
				'tarik' => $this->Dashboard_model->getPenarikan(),
				'profil' => $this->Dashboard_model->getProfil(),
			];
			$this->load->view('home/homeAdmin', $dataAdmin);
		}
		$this->load->view('templates/footer');
	}
}
