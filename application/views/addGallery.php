<?php echo $this->load->view('templates/header', null, true);?>

<?php echo validation_errors(); ?>

<div>

	<form action="<?php echo base_url('addGallery/add') ?>" method="post">
		<input type="text" name="name" placeholder="Nome da Galeria" />
		<button type="submit">Criar nova galeria</button>
	</form>

</div>
