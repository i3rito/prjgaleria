<?php

namespace Hleria\Scope;

class GalleryImages
{

	function __construct($gallery_repo, $images_repo)
	{
		$this->gallery_repo = $gallery_repo;
		$this->images_repo = $images_repo;
	}

	public function execute($idGallery)
	{
		$gallery = $this->gallery_repo->getGallery($idGallery);
		$galleryImages = $this->images_repo->getImagesByGalleryId($idGallery);

		$data['gallery'] = $gallery;
		$data['navActive'] = 'galleryList';
		$data['galleryImages'] = $galleryImages;

		return $data;
	}

}
