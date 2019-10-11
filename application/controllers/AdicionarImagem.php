<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdicionarImagem extends CI_Controller {

	public function index($idGaleria)
	{
		$title = 'Adicione uma imagem.';
		$data ['title'] = $title;
		$data['idGaleria'] =$idGaleria;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('imagem', $data);
		$this->load->view('templates/footer', $data);

	}

	public function create()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'text', 'required');
		$this->form_validation->set_rules('idGaleria', 'hidden', 'required');
		$url = $this->input->post('url');
		$idGaleria = $this->input->post('idGaleria');
		$this->Imagens_model->insere_imagens($url, $idGaleria);
		redirect('/gallery/index/'.$idGaleria, 'location');

	}


}
