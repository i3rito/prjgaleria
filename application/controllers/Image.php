<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Hleria\Entity\Image as Images_entity;
use Hleria\Repo\Images;

class Image extends CI_Controller {

	public function index($idGallery)
	{
		# TODO: uma view para mostar a imagem.
	}

	public function add()
	{
		# Recebe a imagem e o id da galeria via formulário.
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = ['jpg', 'jpeg','png', 'gif'];
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name');
		$up_file_name = $this->upload->data();
		$url = '/assets/images/' . $up_file_name['file_name'];

		$idGallery = $this->input->post('idGallery');

		# Carrega a Entidade.
		$image_entity = new Images_entity();
		$image_entity->url = $url;
		$image_entity->idGallery = $idGallery;

		# Carrega o repositório.
		$images_repo = new Images();
		$images_repo->insertImage($image_entity);

		# Redireciona para a página da galeria.
		redirect(base_url('/gallery/index/'.$idGallery), 'location');
	}

	public function remove()
	{
		# Recebe os ids da imagem e galeria via formulário.
		$id = $this->input->post('id');
		$idGallery = $this->input->post('idGallery');

		# Carrega o Repositório.
		$images_repo = new Images($this->Images);
		$images_repo->removeImage($id);

		# Redireciona de volta para a página de edição da galeria.
		redirect (base_url('gallery/edit/'.$idGallery), 'location');
	}

}
