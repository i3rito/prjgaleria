<?php

namespace Hleria\Scope;

class GalleryPage
{
	private $gallery_list_repo;

	function __construct($gallery_repo, $images_repo)
	{
		$this->gallery_repo = $gallery_repo;
		$this->images_repo = $images_repo;
	}

	public function execute($idGallery)
	{
		$gallery = $this->gallery_repo->getGallery($idGallery);
		$images = $this->images_repo->getImagesByGalleryId($idGallery);

		$navActive = 'galleryList';

		$buttons = array(
			"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK4O69duEn6qOBwUz3m5eCYHC4EBCF8tOuAiZoq_F8PzFrI4pE6A&s",
			"https://image.flaticon.com/icons/png/512/64/64031.png",
		);

		$data = [
			'gallery' => $gallery,
			'images' => $images,
			'buttons' => $buttons,
			'navActive' => $navActive,
		];

		return $data;
	}

}
