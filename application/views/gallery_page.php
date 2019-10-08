<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Projeto Galeria</title>
		<script src="/assets/js/jquery.min.js"></script>
		<style>
			.item-galeria{
				display: none;
			}
			.active {
				border: 1px solid red;
				display: inline;
			}
			#viewport{
				height: 172px;
				width: 300px;
			}
		</style>
	</head>
	<body>

		<div id="viewport">
		<!-- Imagens -->
			<div>
				<?php foreach($imagens as $key => $imagem) { ?>
					<img src="<?php echo $imagem; ?>" class="item-galeria <?php echo ($key==0) ? 'active' : ''; ?>"  style="width: 300px;"/>
				<?php } ?>
			</div>
		</div>

		<!-- buttons -->
		<div>
			<img src="<?php echo($botoes[0]); ?>" style="width:50px" class="botao-voltar">
			<img src="<?php echo($botoes[1]); ?>" style="width:50px" class="botao-avancar">
		</div>

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

	</body>

</html>
