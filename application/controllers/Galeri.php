<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/galeri');
		$this->load->view('templates/_footer');
	}
}
