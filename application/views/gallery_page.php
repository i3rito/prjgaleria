<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<title> hello world </title>
	</head>

	<body>

	<div class="container">
		<img src="<?php echo($img1); ?>" id="viewport" style="width:44.6%">
	</div>


	<!-- buttons -->
		<div class="row">
			<div class="column">
				<img src="<?php echo($img4); ?>" style="width:50px" onclick="chooseUp( document.getElementById('viewport') )">
				<img src="<?php echo($img5); ?>" style="width:50px" onclick="chooseDown( document.getElementById('viewport') )">
			</div>
		</div>

		<script>

            function chooseDown(imgs) {

                if(imgs.src == "<?php echo($img1); ?>"){
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img2); ?>";
                }else if(imgs.src == "<?php echo($img2); ?>"){
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img3); ?>";
                }else if(imgs.src == "<?php echo($img3); ?>") {
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img1); ?>";
                }

            }
            function chooseUp(imgs) {

                if(imgs.src == "<?php echo($img1); ?>"){
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img3); ?>";
                }else if(imgs.src == "<?php echo($img2); ?>"){
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img1); ?>";
                }else if(imgs.src == "<?php echo($img3); ?>") {
                    var expandImg = document.getElementById("viewport");
                    expandImg.src = "<?php echo($img2); ?>";
                }

            }
		</script>

		</body>

</html>
