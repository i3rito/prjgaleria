<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">
			<a style="color: black"
				href="<?php echo base_url('/gallery/edit/'.$gallery->id) ?>">
				<?php echo $gallery->name; ?>
			</a>
		</h1>
		<hr class="my-4">
		<p class="lead"> Criada em: <?php echo $gallery->date; ?> </p>
	</div>
</div>

<?php if (count($images) <= 0) { ?>

	<div class="card container">
		<div class="card-body">
			<h4 class="card-text">Esta galeria ainda não possui nenhuma foto.</h4>
			<form action="<?php echo base_url('/Image/add')?>" method="post" enctype="multipart/form-data">
				<div class="form-group d-flex justify-content-center">
					<form action="<?php echo base_url('Image/add/') ?>" class="form-inline" method="post">
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Add imagem">
							<input type="file" name="file_name"/>
							<input type="hidden" name="idGallery"value = "<?php echo $gallery->id; ?>" />
						</div>
					</form>
					<form action="<?php echo base_url('/gallery/edit/'.$gallery->id) ?>" method="post">
						<div class="form-group mb-2">
							<button class="btn btn-primary" type="submit">Editar Galeria</button>
						</div>
					</form>

				</div>
			</form>
		</div>
	</div>

<?php } else { ?>

	<form action="<?php echo base_url('/Image/add')?>" method="post" enctype="multipart/form-data">
		<div class="form-group d-flex justify-content-center">
			<form action="<?php echo base_url('/Image/add/') ?>" class="form-inline" method="post">
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Add imagem">
					<input type="file" name="file_name"/>
					<input type="hidden" name="idGallery"value = "<?php echo $gallery->id; ?>" />
				</div>
			</form>
			<form action="<?php echo base_url('/gallery/edit/'.$gallery->id) ?>" method="post">
				<div class="form-group mb-2">
					<button class="btn btn-primary" type="submit">Editar Galeria</button>
				</div>
			</form>
		</div>
	</form>

	<div class="container">
	</div>
	<br>

	<div class="row">
		<div class="container col-lg-4 col-md-8">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php foreach($images as $key => $image) { ?>
						<li data-target="#carouselExampleCaptions" data-slide-to="$key"
							class="
								<?php echo ($key==0) ? 'active' : ''; ?>">
						</li>
					<?php } ?>
				</ol>
				<div class="carousel-inner">

					<?php foreach($images as $key => $image) { ?>
						<div class="carousel-item
							 <?php echo ($key==0) ? 'active' : ''; ?>">
							<img
								src="<?php echo $image->url; ?>"
								class="d-block w-100"
							/>
						</div>
					<?php } ?>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

<?php } ?>
