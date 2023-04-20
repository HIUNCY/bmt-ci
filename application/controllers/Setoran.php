<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setoran extends CI_Controller
{
	public function index()
	{
		$data = [
			'setoran' => $this->db->query("SELECT SUM(setor) as total  from tb_tabungan where jenis='ST'")->row_array(),
			'dataSetor' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='ST' order by tgl desc, id_tabungan desc"),
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
			'dataSiswa' => $this->db->get_where('tb_siswa', ['status' => 'Aktif'])
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

		$this->db->insert('tb_tabungan', $data);
		redirect('admin/setoran');
	}

	public function editSetoran()
	{
		$id = $this->uri->segment(3);
		$data = [
			'setoran' => $this->db->query("select s.nis, s.nama_siswa, t.id_tabungan, t.setor, t.tgl, t.petugas from tb_siswa s join tb_tabungan t on s.nis=t.nis where jenis ='ST' and id_tabungan='" . $id . "'")->row_array(),
			'dataSiswa' => $this->db->get('tb_siswa')
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('setoran/editSetoran', $data);
		$this->load->view('templates/footer');
	}

	public function updateSetoran()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'setor' => preg_replace("/[^0-9]/", "", $this->input->post('setor')),
			'tgl' => date("Y-m-d"),
			'petugas' => $this->session->userdata('nama')
		];

		$this->db->where('id_tabungan', $this->input->post('id_tabungan'));
		$this->db->update('tb_tabungan', $data);
		redirect('admin/setoran');
	}
}
