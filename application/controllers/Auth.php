<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('login/loginStaff');
	}

	public function siswa()
	{
		$this->load->view('login/loginSiswa');
	}

	public function cekLoginAdmin()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();
		if ($user != null && $user['password'] == $password) {
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
			redirect('auth/siswa');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
