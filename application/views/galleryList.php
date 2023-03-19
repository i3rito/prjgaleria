	<div class="jumbotron" align="center">
		<div class="container">
			<h1 class="display-4"><?php echo $title; ?></h1>
			<p class="lead "> Galerias disponiveis:</p>
		</div>
		<hr class="my-4">
		<form action="<?php echo base_url('gallery/add') ?>" method="post">
			<button class="btn btn-primary btn-lg" type="submit">Criar nova galeria</button>
		</form>
	</div>

	<table class="table table-striped">
		<thead>
		<tr>
			<th scope="col" >#</th>
			<th scope="col" >Nome</th>
			<th scope="col">Quantidade de Fotos</th>
			<th scope="col">Data de Criação</th>
			<th scope="col"></th>
		</tr >
		</thead>
		<tbody>
			<?php foreach ($galleryList as $key=>$gallery){?>
				<tr>
					<th scope="row"><?php echo ( ( $key + $page ) +1);?></th>
					<td>
						<a style="color: black"
							href="<?php echo base_url('gallery/' . $gallery->id); ?>">
							<?php echo $gallery->name; ?>
						</a>
					</td>
					<td><?php echo $gallery->imageCount; ?></td>
					<td><?php echo $gallery->date;?></td>
					<td>
						<div class="form-group d-flex justify-content-center">
							<form action="<?php echo base_url('gallery/remove') ?>" method="post">
								<input type="hidden" name="id" value = "<?php echo $gallery->id; ?>" />
								<button type="submit" class="btn btn-danger"> Apagar </button>
							</form>
							<form action="<?php echo base_url('gallery/'.$gallery->id) ?>" method="post">
								<button class="btn btn-primary" type="submit"> Abrir </button>
							</form>
						</div>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>

	<?php echo $links; ?>

