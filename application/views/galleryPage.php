
<div class="jumbotron">
	<div class="container">
		<h1 class="display-4"><?php echo $title; ?></h1>
		<hr class="my-4">
		<p class="lead"> Criada em: <?php echo $galleryDate;?></p>
	</div>
</div>

<?php if (count($images) <= 0) { ?>

<div class="card container">
	<div class="card-body">
		<h4 class="card-text">Esta galeria ainda não possui nenhuma foto.</h4>
		<form action="<?php echo base_url('addImage/index/'.$idGallery) ?>"
			  method="post"
			  class="d-flex justify-content-center">
			<button class="btn btn-primary btn-md" type="submit">Add imagem</button>
		</form>
	</div>
</div>

<?php } else { ?>

<div class="bd-example justify-content-center w-50 container">
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
</div><br>
<div class="container">
	<form action="<?php echo base_url('addImage/index/'.$idGallery) ?>" method="post">
		<button class="btn btn-primary btn-lg" type="submit">Add imagem</button>
	</form>
</div>
<?php } ?>
