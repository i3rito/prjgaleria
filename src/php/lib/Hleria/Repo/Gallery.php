<?php

namespace Hleria\Repo;

use Hleria\Entity\Gallery as Gallery_entity;

class Gallery extends \Hleria\Repo\Base
{

	public function getGalleryList($limit, $offset)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->select('*');
		$db->limit($limit);
		$db->offset($offset);
		$db->from('Galleries');

		# Executa a query.
		$galleryList = $this->getResults($db);

		# Transfoma em Entidade.
		$galleries = [];
		foreach ($galleryList as $gallery)
		{
			$gallery_entity = new Gallery_entity();

			$gallery_entity->id = $gallery->id;
			$gallery_entity->name = $gallery->name;
			$gallery_entity->date = $gallery->date;

			$galleries[] = $gallery_entity;
		}

		return $galleries;
	}

	public function getGallery($id)
	{

		# Monta a query.
		$db = $this->getQuery();
		$db->select('*');
		$db->from('Galleries');
		$db->where('id', $id);

		# Executa a query.
		$gallery = $this->getRow($db);

		# Transfoma em Entidade.
		$gallery_entity = new Gallery_entity();
		$gallery_entity->id = $gallery->id;
		$gallery_entity->name = $gallery->name;
		$gallery_entity->date = $gallery->date;

		return $gallery_entity;
	}

	public function getCount()
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->select('id');
		$db->from('Galleries');

		# Limpa o cache.
		$db->flush_cache();

		# Executa a query.
		$results = $this->getNumRows($db);

		return $results;
	}

	public function insertGallery($gallery)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->set($gallery);
		$db->from('Galleries');

		# Executa a query.
		$db->insert();
	}

	public function updateGallery($gallery)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->set('name', $gallery->name);
		$db->from('Galleries');
		$db->where('id', $gallery->id);

		# Executa a query.
		$db->update();
	}

	public function removeGallery($id)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->where('id', $id);
		$db->from('Galleries');

		# Executa a query.
		$db->delete();
	}

}
