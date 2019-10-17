<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddGallery extends CI_Controller {

	public function index()
	{
		$title = 'Crie uma nova galeria.';
		$data ['title'] = $title;
		$navActive = 'galleryList';
		$data ['navActive'] = $navActive;
		$this->load->view('addGallery', $data);
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'text', 'required|min_length[3]',
			array('required' => 'Escreva o nome da galeria no campo abaixo.', 'min_length' => 'Utilize pelo menos 3 caracteres.'));

		if ($this->form_validation->run() == FALSE) {
			$title = 'Crie uma nova galeria.';
			$navActive = 'galleryList';
			$data ['title'] = $title;
			$data ['navActive'] = $navActive;
			$this->load->view('addGallery', $data);
		} else {
			$name = $this->input->post('name');
			$this->Gallery_model->insertGallery($name);
			redirect(base_url('galleryList'), 'location');
		}
	}

}
