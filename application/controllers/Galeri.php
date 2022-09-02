<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function index()
	{
		$data = array('title' => "Galeri");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/galeri');
		$this->load->view('templates/_footer');
	}
}
