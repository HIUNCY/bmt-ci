<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataSiswa' => $this->db->query("SELECT s.nis, s.nama_siswa, s.jekel, s.status, s.th_masuk, k.kelas 
			from tb_siswa s inner join tb_kelas k on s.id_kelas=k.id_kelas 
			order by kelas asc, nis asc")
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
			'dataKelas' => $this->db->query("select * from tb_kelas")
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

		$this->db->insert('tb_siswa', $data);
		redirect('admin/siswa');
	}

	public function editSiswa()
	{
		$nis = $this->uri->segment(3);
		$data = [
			'siswa' => $this->db->get_where('tb_siswa', ['nis' => $nis])->row_array(),
			'dataKelas' => $this->db->get('tb_kelas'),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa/editSiswa', $data);
		$this->load->view('templates/footer');
	}

	public function updateSiswa()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'jekel' => $this->input->post('jekel'),
			'id_kelas' => $this->input->post('id_kelas'),
			'status' => $this->input->post('status'),
			'th_masuk' => $this->input->post('th_masuk'),
		];

		$this->db->replace('tb_siswa', $data);
		redirect('admin/siswa');
	}

	public function deleteSiswa()
	{
		$nis = $this->uri->segment(3);
		$this->db->delete('tb_siswa', ['nis' => $nis]);
		redirect('admin/siswa');
	}
}
