<?php

use Hleria\Repo\Gallery;
use Hleria\Entity\Gallery as Gallery_entity;

defined('BASEPATH') OR exit('No direct script access allowed');

class AddGallery extends CI_Controller {

	public function index()
	{

		if( $this->input->post() )
		{
			# Define as regras do formulário.
			$this->form_validation->set_rules('name', 'text', 'required|min_length[3]',
				array('required' => 'Escreva o nome da galeria no campo abaixo.', 'min_length' => 'Utilize pelo menos 3 caracteres.'));

			# Executa a validação do formulário.
			if ($this->form_validation->run())
			{
				# Recebo o nome a ser cadastrado.
				$name = $this->input->post('name');

				# Carrega a entidade.
				$gallery_entity = new Gallery_entity();
				$gallery_entity->name = $name;
				$gallery_entity->date = date('y-m-d');

				# Carrega o repositório.
				$gallery_repo = new Gallery();
				$gallery_repo->insertGallery($gallery_entity);

				# Redireciona de volta para a página principal.
				redirect( base_url(), 'location');
			}

		}

		# Prepara os dados para a view.
		$data ['title'] = 'Crie uma nova galeria.';
		$data ['navActive'] = 'galleryList';

		# Carrega a view.
		$this->load->view('addGallery', $data);

	}

}
