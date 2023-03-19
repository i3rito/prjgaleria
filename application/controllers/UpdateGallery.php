<?php

use Hleria\Entity\Gallery as Gallery_entity;
use Hleria\Repo\Gallery;
use Hleria\Repo\Images;
use Hleria\Scope\GalleryImages;

defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateGallery extends CI_Controller {

	public function index($idGallery)
	{
		# Carrega os Repositórios.
		$gallery_repo = new Gallery();
		$images_repo = new Images();

		# Carrega  o Scope.
		$gallery_images_scope = new GalleryImages($gallery_repo, $images_repo);
		$data = $gallery_images_scope->execute($idGallery);

		# Carrega a View.
		$this->load->view('templates/header', $data);
		$this->load->view('galleryEdit', $data);
		$this->load->view('templates/footer');

	}

	public function update()
	{
		# Recebe o id via formulário.
		$idGallery = $this->input->post('idGallery');

		# Define as regras do formulário.
		$this->form_validation->set_rules('name', 'text', 'required|min_length[3]',
			array('required' => 'Escreva o nome da galeria no campo abaixo.', 'min_length' => 'Utilize pelo menos 3 caracteres.'));

		# Executa a validação do formulário.
		if ( $this->form_validation->run() )
		{
			# Recebe o nome via formulário.
			$name = $this->input->post('name');

			# Carrega a Entidade.
			$gallery_entity = new Gallery_entity();
			$gallery_entity->id = $idGallery;
			$gallery_entity->name = $name;

			# Carrega o Repositório.
			$gallery_repo = new Gallery();
			$gallery_repo->updateGallery($gallery_entity);
		}

		# Redireciona de volta para a página de edição da galeria.
		redirect(base_url('gallery/edit/'. $idGallery), 'location');
	}

}
