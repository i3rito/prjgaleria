<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index()
	{
		$title = 'hLeria';
		$navActive = 'home';
		$data ['title'] = $title;
		$data ['navActive'] = $navActive;
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

}
