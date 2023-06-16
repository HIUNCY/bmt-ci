<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penarikan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nama')) {
			redirect('auth');
		} elseif ($this->uri->segment(1) !== $this->session->userdata('level')) {
			redirect(base_url($this->session->userdata('level')));
		}
	}

	public function index()
	{
		$data = [
			'penarikan' => $this->Penarikan_model->getPenarikan(),
			'dataTarik' => $this->Penarikan_model->getDataTarik(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan/penarikan', $data);
		$this->load->view('templates/footer');
	}

	public function tambahPenarikan()
	{
		$data = [
			'dataSiswa' => $this->Penarikan_model->getSiswa(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan/tambahPenarikan', $data);
		$this->load->view('templates/footer');
	}

	public function createPenarikan()
	{
		$nis = $this->input->post('nis');
		$tarik = preg_replace("/[^0-9]/", "", $this->input->post('tarik'));
		$jumlahSetor = $this->Penarikan_model->getJumlahSetor($nis);
		$jumlahTarik = $this->Penarikan_model->getJumlahTarik($nis);
		$jumlahTabungan = $jumlahSetor['Tsetor'] - $jumlahTarik['Ttarik'];

		if ($jumlahTabungan - $tarik >= 0) {
			$data = [
				'nis' => $nis,
				'setor' => '0',
				'tarik' => $tarik,
				'tgl' => date("Y-m-d"),
				'jenis' => 'TR',
				'petugas' => $this->session->userdata('nama')
			];

			$this->Penarikan_model->insertPenarikan($data);
			redirect($this->session->userdata('level') . '/penarikan');
		} elseif ($jumlahTabungan - $tarik < 0) {
			$this->session->set_flashdata('note', '<div class="alert alert-danger alert-message" role="alert">Penarikan Melebihi Jumlah Tabungan!</div>');
			redirect($this->session->userdata('level') . '/tambah-penarikan');
		}
	}

	public function editPenarikan()
	{
		$id = $this->uri->segment(3);
		$data = [
			'penarikan' => $this->Penarikan_model->getDataPenarikan($id),
			'dataSiswa' => $this->Penarikan_model->getDataSiswa(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan/editPenarikan', $data);
		$this->load->view('templates/footer');
	}

	public function updatePenarikan()
	{
		$id = $this->input->post('id_tabungan');
		$data = [
			'nis' => $this->input->post('nis'),
			'tarik' => preg_replace("/[^0-9]/", "", $this->input->post('tarik')),
			'tgl' => date("Y-m-d"),
			'petugas' => $this->session->userdata('nama')
		];

		$this->Penarikan_model->updatePenarikan($id, $data);
		redirect($this->session->userdata('level') . '/penarikan');
	}
}
