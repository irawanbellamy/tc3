<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = array('title' => "Tentang Kami");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/index');
		$this->load->view('templates/_footer');
	}
}
