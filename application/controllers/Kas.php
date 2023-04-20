<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kas extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kas/kas');
		$this->load->view('templates/footer');
	}

	public function dataKas()
	{
		$tgl_1 = $this->input->post('tgl_1');
		$tgl_2 = $this->input->post('tgl_2');
		$data = [
			'setor' => $this->Kas_model->getSetor($tgl_1, $tgl_2),
			'tarik' => $this->Kas_model->getTarik($tgl_1, $tgl_2),
		];

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('kas/dataKas', $data);
		$this->load->view('templates/footer');
	}
}
