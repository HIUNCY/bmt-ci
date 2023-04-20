<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penarikan extends CI_Controller
{
	public function index()
	{
		$data = [
			'penarikan' => $this->db->query("SELECT SUM(tarik) as total  from tb_tabungan where jenis='TR'")->row_array(),
			'dataTarik' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='TR' order by tgl desc, id_tabungan desc"),
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
			'dataSiswa' => $this->db->get_where('tb_siswa', ['status' => 'Aktif'])
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan/tambahPenarikan', $data);
		$this->load->view('templates/footer');
	}

	public function createPenarikan()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'setor' => '0',
			'tarik' => preg_replace("/[^0-9]/", "", $this->input->post('tarik')),
			'tgl' => date("Y-m-d"),
			'jenis' => 'TR',
			'petugas' => $this->session->userdata('nama')
		];

		$this->db->insert('tb_tabungan', $data);
		redirect('admin/penarikan');
	}

	public function editPenarikan()
	{
		$id = $this->uri->segment(3);
		$data = [
			'penarikan' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='TR' and id_tabungan='" . $id . "'")->row_array(),
			'dataSiswa' => $this->db->get('tb_siswa')
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('penarikan/editPenarikan', $data);
		$this->load->view('templates/footer');
	}

	public function updatePenarikan()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'tarik' => preg_replace("/[^0-9]/", "", $this->input->post('tarik')),
			'tgl' => date("Y-m-d"),
			'petugas' => $this->session->userdata('nama')
		];

		$this->db->where('id_tabungan', $this->input->post('id_tabungan'));
		$this->db->update('tb_tabungan', $data);
		redirect('admin/penarikan');
	}
}
