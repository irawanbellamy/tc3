<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paguyuban extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/paguyuban');
		$this->load->view('templates/_footer');
	}

	public function pengurus()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/pengurus');
		$this->load->view('templates/_footer');
	}

	public function adart()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/adart');
		$this->load->view('templates/_footer');
	}

	public function kegiatan()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/kegiatan');
		$this->load->view('templates/_footer');
	}

	public function dokumentasi()
	{
		$this->load->view('templates/_header');
		$this->load->view('page/dokumentasi');
		$this->load->view('templates/_footer');
	}
}
