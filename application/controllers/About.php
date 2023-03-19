<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

	public function index()
	{
		# Prepara os dados para a view.
		$data ['title'] = 'Sobre';
		$data ['navActive'] = 'about';

		# Carrega a view.
		$this->load->view('templates/header', $data);
		$this->load->view('about', $data);
		$this->load->view('templates/footer');
	}

}
