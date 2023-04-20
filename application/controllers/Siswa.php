<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataSiswa' => $this->Siswa_model->getSiswa()
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa/siswa', $data);
		$this->load->view('templates/footer');
	}

	public function tambahSiswa()
	{
		$data = [
			'dataKelas' => $this->Siswa_model->getKelas()
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa/tambahSiswa', $data);
		$this->load->view('templates/footer');
	}

	public function createSiswa()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'jekel' => $this->input->post('jekel'),
			'id_kelas' => $this->input->post('id_kelas'),
			'status' => 'Aktif',
			'th_masuk' => $this->input->post('th_masuk'),
		];

		$this->Siswa_model->insertSiswa($data);
		redirect('admin/siswa');
	}

	public function editSiswa()
	{
		$nis = $this->uri->segment(3);
		$data = [
			'siswa' => $this->Siswa_model->getDataSiswa($nis),
			'dataKelas' => $this->Siswa_model->getKelas(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa/editSiswa', $data);
		$this->load->view('templates/footer');
	}

	public function updateSiswa()
	{
		$nis = $this->input->post('nis');
		$data = [
			'nama_siswa' => $this->input->post('nama_siswa'),
			'jekel' => $this->input->post('jekel'),
			'id_kelas' => $this->input->post('id_kelas'),
			'status' => $this->input->post('status'),
			'th_masuk' => $this->input->post('th_masuk'),
		];

		$this->Siswa_model->updateSiswa($nis, $data);
		redirect('admin/siswa');
	}

	public function deleteSiswa()
	{
		$nis = $this->uri->segment(3);
		$this->Siswa_model->deleteSiswa($nis);
		redirect('admin/siswa');
	}
}
