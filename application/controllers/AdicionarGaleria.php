<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdicionarGaleria extends CI_Controller {

	public function index()
	{
		$title = 'Crie uma nova galeria.';
		$data ['title'] = $title;
		$this->load->view('templates/header', $data);
		$this->load->view('galeria', $data);
		$this->load->view('templates/footer', $data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'text', 'required');
		$nome = $this->input->post('nome');
		$this->Galerias_model->insere_galerias($nome);
		redirect('/home/', 'location');
	}

}
