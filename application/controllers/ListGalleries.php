<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \Hleria\Repo\Gallery;
use \Hleria\Repo\Images;
use \Hleria\Scope\GalleryList;

class ListGalleries extends CI_Controller{

	public function index($page = 0)
	{
		# Carrega os Repositórios.
		$gallery_repo = new Gallery();
		$images_repo = new Images();

		# Carrega a biblioteca de paginação.
		$pagination_lib =  $this->pagination;

		# Prepara os dados pra view.
		$title = 'Galerias';
		$navActive = 'galleryList';

		# Carrega o Scope.
		$gallery_scope = new GalleryList($gallery_repo, $images_repo, $pagination_lib);
		$data = $gallery_scope->execute($title, $navActive, $page);

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('galleryList', $data);
		$this->load->view('templates/footer');
	}

}
