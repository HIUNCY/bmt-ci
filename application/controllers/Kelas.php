<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataKelas' => $this->db->query("SELECT * FROM tb_kelas")
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
		$this->db->insert('tb_kelas', ['kelas' => $this->input->post('kelas')]);
		redirect('admin/kelas');
	}

	public function editKelas()
	{
		$id = $this->uri->segment(3);
		$data = [
			'kelas' => $this->db->get_where('tb_kelas', ['id_kelas' => $id])->row_array()
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kelas/editKelas', $data);
		$this->load->view('templates/footer');
	}

	public function updateKelas()
	{
		$data = [
			'id_kelas' => $this->input->post('id_kelas'),
			'kelas' => $this->input->post('kelas')
		];

		$this->db->replace('tb_kelas', $data);
		redirect('admin/kelas');
	}

	public function deleteKelas()
	{
		$id = $this->uri->segment(3);
		$this->db->delete('tb_kelas', ['id_kelas' => $id]);
		redirect('admin/kelas');
	}
}
