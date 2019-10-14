<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddGallery extends CI_Controller {

	public function index()
	{
		$title = 'Crie uma nova galeria.';
		$data ['title'] = $title;
		$this->load->view('templates/header', $data);
		$this->load->view('addGallery', $data);
		$this->load->view('templates/footer', $data);
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'text', 'required');
		$name = $this->input->post('name');
		$this->Gallery_model->insertGallery($name);
		redirect('/home/', 'location');
	}

}
