<?php

class Gallery_model extends CI_Model
{

	public function getGalleryList()
	{
		$query = $this->db->get('Galleries');
		$results = $query->result_array();

		return $results;
	}

	public function getGallery($idGallery)
	{
		$this->db->where('id', $idGallery);
		$query = $this->db->get('Galleries');
		$result = $query->result();

		return $result[0];
	}

	public function insertGallery($name)
	{
		$data = array(
			'name' => $name,
			'galleryDate' => date('y-m-d'),
		);
		$result =  array($this->db->insert('Galleries', $data));

		return $result;
	}

}
