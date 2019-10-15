<?php

class GalleryList extends CI_Controller {

	public function index()
	{
		$title = 'Galerias';
		$galleryList = $this->Gallery_model->getGalleryList();
		$galleries = array();
		foreach ($galleryList as $gallery)
		{
			$images = $this->Imagens_model->getImages($gallery['id']);
			$quantasImagens = count($images);
			$gallery['imageCount'] = $quantasImagens;
			$galleries[] = $gallery;
		}
		$data ['title'] = $title;
		$data ['galleryList'] = $galleries;

		# View.
		$this->load->view('templates/header');
		$this->load->view('galleryList', $data);
		$this->load->view('templates/footer');
	}

}
