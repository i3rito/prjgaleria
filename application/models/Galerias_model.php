<?php

class Galerias_model extends CI_Model
{

	public function get_galerias()
	{
		$query = $this->db->get('Galerias');
		$results = $query->result_array();

		return $results;
	}
	public function get_galeria($idGaleria)
	{
		$this->db->where('id', $idGaleria);
		$query = $this->db->get('Galerias');
		$result = $query->result();

		return $result[0];
	}
	public function get_dataCriacaoGaleria($idGaleria)
	{
		$this->db->select('dataCriacao');
		$this->db->where('id',$idGaleria);
		$query = $this->db->get('Galerias');
		$result = $query->result();

		return $result[0];
	}
	public function insere_galerias($nome)
	{
		$data = array(
			'nome' => $nome,
			'dataCriacao' => date('y-m-d'),
		);

		$a =  array($this->db->insert('Galerias', $data));
		return $a;
	}

}
