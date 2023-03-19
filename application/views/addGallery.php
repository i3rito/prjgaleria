<?php echo $this->load->view('templates/header', null, true);?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4"><?php echo $title?></h1>
		<p class="lead"><?php echo validation_errors(); ?></p>
		<hr class="my-5">
		<div class="form-group d-flex justify-content-center">
			<form action="<?php echo base_url('gallery/add') ?>" class="form-inline" method="post">
				<div class="form-group mb-2">
					<input type="text" class="form-control" name="name"placeholder="Nome da Galeria">
				</div>
				<div class="btn-group form-group mx-sm-3 mb-2">
					<a href="<?php echo base_url('');?>" class="btn btn-danger btn-">Cancelar</a>
					<button type="submit" name="submit" class="btn btn-primary">Criar nova galeria</button>
				</div>
			</form>
		</div>
	</div>
</div>
