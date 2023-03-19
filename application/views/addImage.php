<script src="/assets/js/jquery.min.js"></script>

<div>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4"><?php echo $title?></h1>
		<p class="lead"><?php echo validation_errors(); ?></p>
		<hr class="my-5">
		<div class="form-group d-flex justify-content-center">
			<form action="<?php echo base_url('addImage/add') ?>" class="form-inline" method="post">
				<div class="form-group mb-2">
					<input type="text" class="form-control"  name="url" placeholder="www.linkdaimagem.com" />
				</div>
				<input type="hidden" name="idGallery"value = "<?php echo $idGallery; ?>" />
				<div class="form-group mx-sm-3 mb-2">
					<a href="<?php echo base_url('gallery/index/' . $idGallery);?>" class="btn btn-danger btn-">Cancelar</a>
					<button type="submit " class="btn btn-primary">Add imagem</button>
				</div>
			</form>
		</div>
	</div>
</div>
