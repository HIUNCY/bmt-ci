<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
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
			'dataKelas' => $this->Kelas_model->getKelas(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kelas/kelas', $data);
		$this->load->view('templates/footer');
	}

	public function tambahKelas()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kelas/tambahKelas');
		$this->load->view('templates/footer');
	}

	public function createKelas()
	{
		$data = ['kelas' => $this->input->post('kelas')];
		$this->Kelas_model->insertKelas($data);
		redirect('admin/kelas');
	}

	public function editKelas()
	{
		$id = $this->uri->segment(3);
		$data = [
			'kelas' => $this->Kelas_model->getDataKelas($id),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kelas/editKelas', $data);
		$this->load->view('templates/footer');
	}

	public function updateKelas()
	{
		$id = $this->input->post('id_kelas');
		$data = ['kelas' => $this->input->post('kelas')];

		$this->Kelas_model->updateKelas($id, $data);
		redirect('admin/kelas');
	}

	public function deleteKelas()
	{
		$id = $this->uri->segment(3);
		$this->Kelas_model->deleteKelas($id);
		redirect('admin/kelas');
	}
}
