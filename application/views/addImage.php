<div>

	<form action="<?php echo base_url('addImage/add') ?>" method="post">
		<input type="text" name="url" placeholder="www.linkdaimagem.com" /><br>
		<input type="hidden" name="$idGallery"value = "<?php echo $idGallery; ?>" /><br>
		<button type="submit">Add imagem</button>
	</form>

</div>
