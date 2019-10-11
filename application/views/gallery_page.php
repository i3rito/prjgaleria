
<p> Criada em: <?php echo $dataCriacaoGaleria;?> </p>

<div id="viewport">
	<!-- Imagens -->
	<div>
		<?php foreach($imagens as $key => $imagem) { ?>
			<img src="<?php echo $imagem->url; ?>" class="item-galeria <?php echo ($key==0) ? 'active' : ''; ?>"  style="width: 300px;"/>
			<br>
		<?php } ?>

	</div>

</div>

<!-- buttons -->
<div>
	<?php foreach($botoes as $key => $botao) { ?>
		<img src="<?php echo($botao); ?>" class=" <?php echo ($key==0) ? 'botao-voltar' : 'botao-avancar'; ?>"  style="width: 50px;">
	<?php } ?>
</div>

<form action="<?php echo base_url('adicionarImagem/index/'.$idGaleria) ?>" method="post">
	<button type="submit">Add imagem</button>
</form>

<script>
    (function() {

        var imagens = $('.item-galeria');

        var indiceAtivo;
        var numeroImagnes = imagens.length;
        var proximoAtivo;

        imagens.each(function(index, value) {
            if( $(value).hasClass('active') ) {
                indiceAtivo = index;
            }
        });

        // Avançar imagem.
        $('.botao-avancar').click(function() {
            var imagens = $('.item-galeria');
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
        $('.botao-voltar').click(function() {
            var imagens = $('.item-galeria');
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

