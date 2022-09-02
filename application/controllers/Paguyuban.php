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
		$data = array('title' => "Susunan Pengurus");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/pengurus');
		$this->load->view('templates/_footer');
	}

	public function adart()
	{
		$data = array('title' => "AD ART");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/adart');
		$this->load->view('templates/_footer');
	}

	public function kegiatan()
	{
		$data = array('title' => "Kegiatan Warga");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/kegiatan');
		$this->load->view('templates/_footer');
	}

	public function dokumentasi()
	{
		$data = array('title' => "Dokumentasi");
		$this->load->view('templates/_header', $data);
		$this->load->view('page/dokumentasi');
		$this->load->view('templates/_footer');
	}
}
