<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setoran extends CI_Controller
{
	public function index()
	{
		$data = [
			'setoran' => $this->Setoran_model->getSetoran(),
			'dataSetor' => $this->Setoran_model->getDataSetor(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('setoran/setoran', $data);
		$this->load->view('templates/footer');
	}

	public function tambahSetoran()
	{
		$data = [
			'dataSiswa' => $this->Setoran_model->getSiswa(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('setoran/tambahSetoran', $data);
		$this->load->view('templates/footer');
	}

	public function createSetoran()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'setor' => preg_replace("/[^0-9]/", "", $this->input->post('setor')),
			'tarik' => '0',
			'tgl' => date("Y-m-d"),
			'jenis' => 'ST',
			'petugas' => $this->session->userdata('nama')
		];

		$this->Setoran_model->insertSetoran($data);
		redirect('admin/setoran');
	}

	public function editSetoran()
	{
		$id = $this->uri->segment(3);
		$data = [
			'setoran' => $this->Setoran_model->getDataSetoran($id),
			'dataSiswa' => $this->Setoran_model->getDataSiswa(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('setoran/editSetoran', $data);
		$this->load->view('templates/footer');
	}

	public function updateSetoran()
	{
		$id = $this->input->post('id_tabungan');
		$data = [
			'nis' => $this->input->post('nis'),
			'setor' => preg_replace("/[^0-9]/", "", $this->input->post('setor')),
			'tgl' => date("Y-m-d"),
			'petugas' => $this->session->userdata('nama')
		];

		$this->Setoran_model->updateSetoran($id, $data);
		redirect('admin/setoran');
	}
}
