<?php

class Home extends CI_Controller {

	public function index()
	{
		$title = 'Galerias';


		$galerias = $this->Galerias_model->get_galerias();

		$data ['title'] = $title;
		$data ['galerias'] = $galerias;

		# View.
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);

	}


}
