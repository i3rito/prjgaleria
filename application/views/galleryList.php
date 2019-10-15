<div>

	<h1><?php echo $title; ?></h1>

	<table>
		<?php foreach ($galleryList as $gallery){?>
		<tr>
			<th>
				<a href="<?php echo base_url( 'gallery/index/'.$gallery['id']); ?>">
					<?php echo $gallery['name']; ?>
				</a>
			</th>
			<th>
				<?php echo $gallery['imageCount']; ?>
			</th>
			<th>
				<?php echo $gallery['galleryDate'];?>
			</th>
		</tr>
		<?php }?>
	</table>

<br>

	<form action="<?php echo base_url('addGallery') ?>" method="post">

		<button type="submit">Criar nova galeria</button>

	</form>

</div>

<a href="<?php echo base_url('welcome'); ?>" >Versão do bootstrap</a>
