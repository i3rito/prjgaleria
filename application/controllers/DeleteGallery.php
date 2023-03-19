<?php

use Hleria\Repo\Gallery;
use Hleria\Repo\Images;

defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteGallery extends CI_Controller {

	public function remove()
	{
		# Recebe o id via formulário.
		$id = $this->input->post('id');

		# Carrega o Repositório.
		$gallery_repo = new Gallery();
		$gallery_repo->removeGallery($id);

		# Redireciona para a página principal
		redirect (base_url(), 'location');
	}

}
