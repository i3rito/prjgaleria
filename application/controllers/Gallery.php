<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index($idGaleria)
	{
		$botoes = array(
			"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK4O69duEn6qOBwUz3m5eCYHC4EBCF8tOuAiZoq_F8PzFrI4pE6A&s",
			"https://image.flaticon.com/icons/png/512/64/64031.png",
		);

		$galeria = $this->Galerias_model->get_galeria($idGaleria);
		$dataCriacaoGaleria = $this->Galerias_model->get_dataCriacaoGaleria($idGaleria)->dataCriacao;

		$data['idGaleria'] = $idGaleria;
		$data['imagens'] = $this->Imagens_model->get_imagens($idGaleria);

		$data['botoes'] = $botoes;
		$data['idGaleria'] = $idGaleria;
		$data['dataCriacaoGaleria'] = $dataCriacaoGaleria;
		$data['title'] = $galeria->nome;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('gallery_page', $data);
		$this->load->view('templates/footer', $data);

	}
	public function create(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('url', 'text', 'required');
		$this->form_validation->set_rules('idGaleria', 'hidden', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			echo('WHAAAAt?');
		}
		else
		{

			$idGaleria = $this->input->post('idGaleria');
			$url = $this->input->post('url');

			$a = $this->Imagens_model->insere_imagens($url, $idGaleria);


		}


	}
}
