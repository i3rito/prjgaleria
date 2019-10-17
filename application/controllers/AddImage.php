<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddImage extends CI_Controller {

	public function index($idGallery)
	{
		$title = 'Adicione uma imagem.';
		$navActive = 'galleryList';
		$data ['title'] = $title;
		$data['idGallery'] = $idGallery;
		$data ['navActive'] = $navActive;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('addImage', $data);

	}

	public function add()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'url', 'required|callback_url_check', array('url_check' => 'Insira um URL válido.'));
		$url = $this->input->post('url');
		$idGallery = $this->input->post('$idGallery');

		if ($this->form_validation->run() == FALSE) {
			$title = 'Adicione uma imagem.';
			$data ['title'] = $title;
			$data['idGallery'] = $idGallery;

			# View.
			$navActive = 'galleryList';
			$data ['navActive'] = $navActive;
			$this->load->view('templates/header', $data);
			$this->load->view('addImage', $data);
		} else {
			$this->Imagens_model->insertImage($url, $idGallery);
			redirect('/gallery/index/'.$idGallery, 'location');
		}
	}

	public function url_check($url)
	{
		return is_valid($url);
	}
}
