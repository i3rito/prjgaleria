<script src="/assets/js/jquery.min.js"></script>

<div>

	<?php echo validation_errors(); ?>

	<form action="<?php echo base_url('addImage/add') ?>" method="post">

		<input type="text"  name="url" placeholder="www.linkdaimagem.com" />
		<input type="hidden" name="$idGallery"value = "<?php echo $idGallery; ?>" />
		<button class="submit">Add imagem</button>

	</form>

</div>
