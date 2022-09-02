<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
	public function index()
	{
		$data = array('title' => "Hubungi Kami");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/kontak');
		$this->load->view('templates/_footer');
	}
}
