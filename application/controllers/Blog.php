<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function index()
	{
		$data = array('title' => "Blog");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/blog');
		$this->load->view('templates/_footer');
	}
}
