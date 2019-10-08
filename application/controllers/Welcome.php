<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$data['img1'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzO2-YI3A-GLoh26_r1JpIe6HUl_yuLznBA6Q7J8PSa-rrtmMGAQ&s";
		$data['img2'] = "https://assets.foxdcg.com/dpp-uploaded/images/the-simpsons/seriesDetail_s31.jpg?fit=inside%7C1920:1080";
		$data['img3'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc_clJCCYNgbOU7znazdYz88b9LowwyFy_nvmnVbpRPl3_hkco&s";

		$this->load->view('welcome_message', $data);
	}
}
