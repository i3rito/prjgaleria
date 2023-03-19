<?php

namespace Hleria\Repo;

use Hleria\Entity\Image as Images_entity;

class Images extends \Hleria\Repo\Base
{

	public function insertImage($image)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->set($image);
		$db->from('Images');

		# Executa a query.
		$db->insert();
	}

	public function getImagesByGalleryId($id)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->select('*');
		$db->from('Images');
		$db->where('idGallery', $id);

		# Executa a query.
		$images =  $this->getResults($db);

		# Transfoma em Entidade.
		$galleryImages = [];
		foreach ($images as $image)
		{
			$image_entity = new Images_entity();

			$image_entity->id = $image->id;
			$image_entity->url = $image->url;
			$image_entity->idGallery = $image->idGallery;

			$galleryImages[] = $image_entity;
		}

		return $galleryImages;
	}

	public function removeImage($id)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->from('Images');
		$db->where('id', $id);

		# Executa a query.
		$db->delete();
	}

	public function getCount($id)
	{
		# Monta a query.
		$db = $this->getQuery();
		$db->select('id');
		$db->from('Images');
		$db->where('idGallery', $id);

		# TODO: Rever uso desse flush_cache;
		# Limpa o cache.
		$db->flush_cache();

		# Executa a query.
		$results = $this->getNumRows($db);

		return $results;
	}

}
