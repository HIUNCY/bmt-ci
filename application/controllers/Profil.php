<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
			'dataSekolah' => $this->Profil_model->getProfil(),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('profil/profil', $data);
		$this->load->view('templates/footer');
	}

	public function editProfil()
	{
		$data = [
			'profil' => $this->Profil_model->getProfil(),
		];


		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('profil/editProfil', $data);
		$this->load->view('templates/footer');
	}

	public function updateProfil()
	{
		$id = $this->input->post('id_profil');
		$data = [
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'akreditasi' => $this->input->post('akreditasi'),
		];

		$this->Profil_model->updateProfil($id, $data);
		redirect($this->session->userdata('level') . '/profil');
	}
}
