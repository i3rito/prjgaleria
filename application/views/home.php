<div>

	<h1><?php echo $title; ?></h1>

	<?php foreach ($galleryList as $gallery){?>
		<a href="<?php echo base_url( 'gallery/index/'.$gallery['id']); ?>">
			<?php echo $gallery['name']; ?>
		</a>
		<br><br>
	<?php }?>

	<form action="<?php echo base_url('addGallery') ?>" method="post">
		<button type="submit">Criar nova galeria</button>
	</form>

</div>

<a href="<?php echo base_url('welcome'); ?>" >Versão do bootstrap</a>
