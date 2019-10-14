<?php
class Imagens_model extends CI_Model {

	public function getImages($idGallery)
	{
		$this->db->select('*');
		$this->db->from('Images');
		$this->db->where('idGallery', $idGallery);
		$query = $this->db->get();
		$results = $query->result();

		return $results;
	}

	public function insertImage($url, $idGallery)
	{
		$this->load->helper('url');
		$data = array(
			'url' => $url,
			'idGallery' => $idGallery,
		);
		$result =  array($this->db->insert('Images', $data));

		return $result;
	}
}
