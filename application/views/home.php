<div>

	<?php foreach ($galerias as $galeria){?>
		<a href="<?php echo base_url( 'gallery/index/'.$galeria['id']); ?>">
			<?php echo $galeria['nome']; ?>
		</a>
		<br><br>
	<?php }?>

	<form action="<?php echo base_url('adicionarGaleria/index') ?>" method="post">
		<button type="submit">Criar nova galeria</button>
	</form>

</div>
