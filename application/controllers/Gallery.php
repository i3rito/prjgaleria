<?php

use \Hleria\Scope\GalleryPage;
use Hleria\Repo\Gallery as Gallery_Repo;
use Hleria\Repo\Images;

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index($idGallery)
	{
		# Carrega os Repositórios.
		$gallery_repo = new Gallery_Repo();
		$images_repo = new Images();

		# Carrega o Scope.
		$gallery_page_scope = new GalleryPage($gallery_repo, $images_repo);
		$data = $gallery_page_scope->execute($idGallery);

		# Carrega a View.
		$this->load->view('templates/header', $data);
		$this->load->view('galleryPage', $data);
		$this->load->view('templates/footer');

	}

}
