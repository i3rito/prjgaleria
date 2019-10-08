<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{

		$data['img1'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzO2-YI3A-GLoh26_r1JpIe6HUl_yuLznBA6Q7J8PSa-rrtmMGAQ&s";
		$data['img2'] = "https://assets.foxdcg.com/dpp-uploaded/images/the-simpsons/seriesDetail_s31.jpg?fit=inside%7C1920:1080";
		$data['img3'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc_clJCCYNgbOU7znazdYz88b9LowwyFy_nvmnVbpRPl3_hkco&s";
		$data['img4'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK4O69duEn6qOBwUz3m5eCYHC4EBCF8tOuAiZoq_F8PzFrI4pE6A&s";
		$data['img5'] =  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqv5kjFd4t20e6uTU1x7rpmKwTL-1ck6mhAJHL3BebeRxABvjZ&s";

		$this->load->view('gallery_page', $data);
	}

}
