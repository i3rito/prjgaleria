
<h1><?php echo $title; ?></h1>

<p> Criada em: <?php echo $galleryDate;?> </p>

<div id="viewport">
	<!-- Imagens -->
	<div>
		<?php foreach($images as $key => $image) { ?>
			<img src="<?php echo $image->url; ?>" class="gallery-item <?php echo ($key==0) ? 'active' : ''; ?>"  style="width: 300px;"/>
			<br>
		<?php } ?>

	</div>

</div>

<!-- buttons -->
<div>
	<?php

	if (count($images) <= 0){
		echo "Esta galeria ainda não possui nenhuma foto.";
	}else{
	foreach($buttons as $key => $button) { ?>
		<img src="<?php echo($button); ?>" class=" <?php echo ($key==0) ? 'btn-back' : 'btn-advance'; ?>"  style="width: 50px;">
	<?php }
	}?>
</div>

<form action="<?php echo base_url('addImage/index/'.$idGallery) ?>" method="post">
	<button type="submit">Add imagem</button>
</form>

<script>
    (function() {

        var imagens = $('.gallery-item');

        var indiceAtivo;
        var numeroImagnes = imagens.length;
        var proximoAtivo;

        imagens.each(function(index, value) {
            if( $(value).hasClass('active') ) {
                indiceAtivo = index;
            }
        });

        // Avançar imagem.
        $('.btn-advance').click(function() {
            var imagens = $('.gallery-item');
            $(imagens[indiceAtivo]).removeClass('active');

            if( indiceAtivo == numeroImagnes-1 ) {
                proximoAtivo = 0;
            } else {
                proximoAtivo = indiceAtivo + 1;
            }

            $(imagens[proximoAtivo]).addClass('active');
            indiceAtivo = proximoAtivo;
        });

        // Voltar imagem.
        $('.btn-back').click(function() {
            var imagens = $('.gallery-item');
            $(imagens[indiceAtivo]).removeClass('active');

            if( indiceAtivo == 0 ) {
                proximoAtivo = numeroImagnes-1;
            } else {
                proximoAtivo = indiceAtivo - 1;
            }

            $(imagens[proximoAtivo]).addClass('active');
            indiceAtivo = proximoAtivo;
        });

    })();
</script>

