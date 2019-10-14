<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

	public function index()
	{
		$title = 'Sobre';
		$data ['title'] = $title;
		$this->load->view('templates/header');
		$this->load->view('about', $data);
		$this->load->view('templates/footer');
	}

}
