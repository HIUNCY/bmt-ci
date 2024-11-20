<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('nama')) {
			redirect(base_url($this->session->userdata('level')));
		}
		$this->load->view('login/loginStaff');
	}

	public function siswa()
	{
		if ($this->session->userdata('nama')) {
			redirect(base_url($this->session->userdata('level')));
		}
		$this->load->view('login/loginSiswa');
	}

	public function cekLoginAdmin()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = hash('sha256', $this->input->post('password'));

		$user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();
		if ($user != null && $password == $user['password']) {
			if ($user['level'] == "Administrator") {
				$this->session->set_userdata(["nama" => $user["nama_pengguna"]]);
				$this->session->set_userdata(["level" => 'admin']);
				redirect('admin');
			} elseif ($user['level'] == "Petugas") {
				$this->session->set_userdata(["nama" => $user["nama_pengguna"]]);
				$this->session->set_userdata(["level" => 'staff']);
				redirect('staff');
			}
		} else {
			$this->session->set_flashdata('note', '<div class="alert alert-danger alert-message" role="alert">Username atau password salah!</div>');
			redirect('/');
		}
	}

	public function cekLoginSiswa()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_siswa', ['nama_siswa' => $username])->row_array();
		if ($user != null && $user['nis'] == $password) {
			$this->session->set_userdata(["nama" => $user["nama_siswa"]]);
			$this->session->set_userdata(["nis" => $user["nis"]]);
			$this->session->set_userdata(["level" => 'siswa']);
			redirect('siswa');
		} else {
			$this->session->set_flashdata('note', '<div class="alert alert-danger alert-message" role="alert">Username atau password salah!</div>');
			redirect('auth/login-siswa');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata(['nama', 'nis', 'level']);
		$this->session->set_flashdata('note', '<div class="alert alert-danger alert-message" role="alert">Anda sudah logout!</div>');
		redirect('auth');
	}
}
