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
		$navActive = 'galleryList';
		$data['idGallery'] = $idGallery;
		$data['images'] = $this->Imagens_model->getImages($idGallery);
		$data['buttons'] = $buttons;
		$data['galleryDate'] = $galleryDate;
		$data['title'] = $gallery->name;
		$data ['navActive'] = $navActive;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('galleryPage', $data);
		$this->load->view('templates/footer');

	}
}
