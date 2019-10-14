<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index($idGallery)
	{
		$buttons = array(
			"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK4O69duEn6qOBwUz3m5eCYHC4EBCF8tOuAiZoq_F8PzFrI4pE6A&s",
			"https://image.flaticon.com/icons/png/512/64/64031.png",
		);

		$gallery = $this->Gallery_model->getGallery($idGallery);
		$galleryDate = $gallery->galleryDate;
		$data['idGallery'] = $idGallery;
		$data['images'] = $this->Imagens_model->getImages($idGallery);
		$data['buttons'] = $buttons;
		$data['galleryDate'] = $galleryDate;
		$data['title'] = $gallery->name;

		# View.
		$this->load->view('templates/gallery/header');
		$this->load->view('galleryPage', $data);
		$this->load->view('templates/gallery/footer');

	}
	public function create(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'text', 'required');
		$this->form_validation->set_rules('idGallery', 'hidden', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			show_404();
		} else
		{
			$idGallery = $this->input->post('idGallery');
			$url = $this->input->post('url');
			$this->Imagens_model->insertImage($url, $idGallery);
		}

	}
}
