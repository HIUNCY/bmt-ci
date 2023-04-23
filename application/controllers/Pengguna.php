<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
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
			'dataPengguna' => $this->Pengguna_model->getDataPengguna(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/pengguna', $data);
		$this->load->view('templates/footer');
	}

	public function tambahPengguna()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/tambahPengguna');
		$this->load->view('templates/footer');
	}

	public function createPengguna()
	{
		$data = [
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
		];

		$this->Pengguna_model->insertPengguna($data);
		redirect($this->session->userdata('level') . '/pengguna');
	}

	public function editPengguna()
	{
		$id = $this->uri->segment(3);
		$data = [
			'pengguna' => $this->Pengguna_model->getPengguna($id),
		];


		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/editPengguna', $data);
		$this->load->view('templates/footer');
	}

	public function updatePengguna()
	{
		$id = $this->input->post('id_pengguna');
		$data = [
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
		];

		$this->Pengguna_model->updatePengguna($id, $data);
		redirect($this->session->userdata('level') . '/pengguna');
	}

	public function deletePengguna()
	{
		$id = $this->uri->segment(3);
		$this->Pengguna_model->deletePengguna($id);
		redirect($this->session->userdata('level') . '/pengguna');
	}
}
