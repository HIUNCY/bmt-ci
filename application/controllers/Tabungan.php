<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
{
	public function index()
	{
		$data = [
			'dataSiswa' => $this->db->query("select * from tb_siswa where status='Aktif'")
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/tabungan', $data);
		$this->load->view('templates/footer');
	}

	public function tabunganSiswa()
	{
		$nis = $this->session->userdata('nis');
		$data = [
			'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' AND nis=$nis")->row_array(),
			'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis")->row_array(),
			'dataTabungan' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where s.nis =$nis order by tgl asc"),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/tabunganSiswa', $data);
		$this->load->view('templates/footer');
	}

	public function dataTabungan()
	{
		$nis = $this->input->post('nis');
		$data = [
			'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' AND nis=$nis")->row_array(),
			'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis")->row_array(),
			'dataTabungan' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where s.nis =$nis order by tgl asc"),
		];
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tabungan/dataTabungan', $data);
		$this->load->view('templates/footer');
	}

	public function cetakTabungan()
	{
		$nis = $this->uri->segment(3);
		$data = [
			'dataSekolah' => $this->db->get('tb_profil')->row_array(),
			'dataSiswa' => $this->db->get_where('tb_siswa', ['nis' => $this->uri->segment(3)])->row_array(),
			'dataCetak' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tarik, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where s.nis =$nis order by tgl asc"),
			'setor' => $this->db->query("SELECT SUM(setor) as Tsetor  from tb_tabungan where jenis='ST' AND nis=$nis")->row_array(),
			'tarik' => $this->db->query("SELECT SUM(tarik) as Ttarik  from tb_tabungan where jenis='TR' AND nis=$nis")->row_array(),
		];

		$this->load->view('templates/header');
		$this->load->view('tabungan/cetakTabungan', $data);
	}
}
