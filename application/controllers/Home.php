<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/index');
		$this->load->view('templates/_footer');
	}
}
