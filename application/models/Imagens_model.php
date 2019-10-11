<?php
class Imagens_model extends CI_Model {

	public function get_imagens($idGaleria)
	{
		$this->db->select('*');
		$this->db->from('Imagens');
		$this->db->where('idGaleria', $idGaleria);

		$query = $this->db->get();
		$results = $query->result();
		return $results;
	}

	public function insere_imagens($url, $idGaleria)
	{
		$this->load->helper('url');
		$data = array(
			'url' => $url,
			'idGaleria' => $idGaleria,
		);

		$a =  array($this->db->insert('Imagens', $data));
		return $a;
	}
}
