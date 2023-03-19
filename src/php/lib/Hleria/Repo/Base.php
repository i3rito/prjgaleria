<?php

namespace Hleria\Repo;

class Base
{

	private $db;

	public function __construct()
	{
		// Assign the CodeIgniter super-object
		$CI =& get_instance();
		$this->db = $CI->db;
	}

	public function getRow($db)
	{
		# Para o cache.
		$db->stop_cache();

		# Executa query.
		$result = $db->get()->row();

		# Esvazia o cache.
		$db->flush_cache();

		return $result;
	}

	public function getResults($db)
	{

		# Para o cache.
		$db->stop_cache();

		# Executa query.
		$results = $db->get()->result();

		# Esvazia o cache.
		$db->flush_cache();

		return $results;
	}

	public function getQuery()
	{
		$this->db->start_cache();
		return $this->db;
	}

	public function getNumRows($db)
	{
		return $db->count_all_results();
	}


}
