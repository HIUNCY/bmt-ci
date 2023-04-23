<?php
defined('BASEPATH') or exit('No direct script access allowed');

class notFoundPage extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
}
