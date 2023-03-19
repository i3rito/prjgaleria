<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index()
	{
		# Prepara os dados para a View.
		$data ['title'] = 'hLeria';
		$data ['navActive'] = 'home';

		# Carrega  a View.
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

}
