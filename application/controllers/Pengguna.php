<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataPengguna' => $this->db->get("tb_pengguna")
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

		$this->db->insert('tb_pengguna', $data);
		redirect('admin/pengguna');
	}

	public function editPengguna()
	{
		$id = $this->uri->segment(3);
		$data = [
			'pengguna' => $this->db->get_where('tb_pengguna', ['id_pengguna' => $id])->row_array(),
		];


		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/editPengguna', $data);
		$this->load->view('templates/footer');
	}

	public function updatePengguna()
	{
		$data = [
			'id_pengguna' => $this->input->post('id_pengguna'),
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level'),
		];

		$this->db->replace('tb_pengguna', $data);
		redirect('admin/pengguna');
	}

	public function deletePengguna()
	{
		$id = $this->uri->segment(3);
		$this->db->delete('tb_pengguna', ['id_pengguna' => $id]);
		redirect('admin/pengguna');
	}
}
