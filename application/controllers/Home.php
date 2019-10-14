<?php

class Home extends CI_Controller {

	public function index()
	{
		$title = 'Galerias';
		$galleryList = $this->Gallery_model->getGalleryList();
		$data ['title'] = $title;
		$data ['galleryList'] = $galleryList;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);

	}


}
