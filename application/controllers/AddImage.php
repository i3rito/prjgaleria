<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddImage extends CI_Controller {

	public function index($idGallery)
	{
		$title = 'Adicione uma imagem.';
		$data ['title'] = $title;
		$data['idGallery'] = $idGallery;

		# View.
		$this->load->view('templates/header');
		$this->load->view('addImage', $data);
		$this->load->view('templates/footer');

	}

	public function add()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'text', 'required');
		$this->form_validation->set_rules('$idGallery', 'hidden', 'required');
		$url = $this->input->post('url');
		$idGallery = $this->input->post('$idGallery');
		$this->Imagens_model->insertImage($url, $idGallery);
		redirect('/gallery/index/'.$idGallery, 'location');

	}


}
