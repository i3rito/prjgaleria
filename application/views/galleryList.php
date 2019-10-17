	<div class="jumbotron" align="center">
		<div class="container">
			<h1 class="display-4"><?php echo $title; ?></h1>
			<p class="lead "> Galerias disponiveis:</p>
		</div>
		<hr class="my-4">
		<form action="<?php echo base_url('addGallery') ?>" method="post">
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
			<th scope="col">Link</th>
		</tr >
		</thead>
		<tbody>
	<?php foreach ($galleryList as $key=>$gallery){?>
		<tr>
			<th scope="row"><?php echo ($key+1);?></th>
				<td><?php echo $gallery['name']; ?></td>
				<td><?php echo $gallery['imageCount']; ?></td>
				<td><?php echo $gallery['galleryDate'];?></td>
				<td> <a class="btn-primary btn" href="<?php echo base_url( 'gallery/index/'.$gallery['id']); ?>">  abrir </a></td>
		</tr>
	<?php }?>
		</tbody>
	</table>

