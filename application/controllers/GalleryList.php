<?php

class GalleryList extends CI_Controller {

	public function index()
	{
		$title = 'Galerias';
		$galleryList = $this->Gallery_model->getGalleryList();
		$data ['title'] = $title;
		$data ['galleryList'] = $galleryList;

		# View.
		$this->load->view('templates/galleryList/header');
		$this->load->view('templates/header');
		$this->load->view('galleryList', $data);
		$this->load->view('templates/galleryList/footer');

	}


}
