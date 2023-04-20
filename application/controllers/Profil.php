<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataSekolah' => $this->db->get("tb_profil")->row_array()
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
			'profil' => $this->db->get('tb_profil')->row_array(),
		];


		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('profil/editProfil', $data);
		$this->load->view('templates/footer');
	}

	public function updateProfil()
	{
		$data = [
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'alamat' => $this->input->post('alamat'),
			'akreditasi' => $this->input->post('akreditasi'),
		];

		$this->db->where('id_profil', $this->input->post('id_profil'));
		$this->db->update('tb_profil', $data);
		redirect('admin/profil');
	}
}
