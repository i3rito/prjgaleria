<div>

	<form action="<?php echo base_url('adicionarImagem/create') ?>" method="post">
		<input type="text" name="url" placeholder="www.linkdaimagem.com" /><br>
		<input type="hidden" name="idGaleria"value = "<?php echo $idGaleria; ?>" /><br>
		<button type="submit">Add imagem</button>
	</form>

</div>
