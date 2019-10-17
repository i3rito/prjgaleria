<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

	public function index()
	{
		$title = 'Sobre';
		$navActive = 'about';
		$data ['title'] = $title;
		$data ['navActive'] = $navActive;
		$this->load->view('templates/header', $data);
		$this->load->view('about', $data);
		$this->load->view('templates/footer');
	}

}
