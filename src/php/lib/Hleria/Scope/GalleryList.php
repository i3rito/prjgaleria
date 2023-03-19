<?php

namespace Hleria\Scope;

class GalleryList
{

	function __construct($gallery_repo, $images_repo, $pagination)
	{
		$this->gallery_repo = $gallery_repo;
		$this->images_repo = $images_repo;
		$this->pagination = $pagination;
	}

	public function execute($title, $navActive, $page)
	{
		# Configura a paginação.
		$config = [
			"first_link" => false,
			"last_link" => false,
			"prev_link" => '<li class="page-item"> <p class="page-link"> <span aria-hidden="true">&laquo;</span> </p> </li>',
			"next_link" => '<li class="page-item"> <p class="page-link"> <span aria-hidden="true">&raquo;</span> </p> </li>',
			"full_tag_open" => '<nav aria-label="Navegação de página exemplo"> <ul class="pagination">',
			"full_tag_close" => '</ul></nav>',
			"cur_tag_open" => '<li class="page-item"><a class="page-link">',
			"cur_tag_close" => '</a></li>',
			"num_tag_open" => '<li class="page-item"><p class="page-link">',
			"num_tag_close" => '</p></li>',
			"base_url" => base_url('gallery/list'),
			"total_rows" => $this->gallery_repo->getCount(),
			"per_page" => 5,
		];

		# Carrega a paginação.
		$this->pagination->initialize($config);

		# Carrega as galerias.
		$galleryList = $this->gallery_repo->getGalleryList($config["per_page"], $page);

		$galleries = [];
		foreach ($galleryList as $gallery)
		{
			$gallery->imageCount = $this->images_repo->getCount($gallery->id);
			$galleries[] = $gallery;
		}

		# Prepara os dados pra view.
		$data = [
			"title" => $title,
			"navActive" => $navActive,
			"galleryList" => $galleries,
			"page" => $page,
			"links" => $this->pagination->create_links(),
		];

		return $data;
	}

}
