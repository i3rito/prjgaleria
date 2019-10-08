<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<title> hello world </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* {
				box-sizing: border-box;
			}

			body {
				margin: 0;
				font-family: Arial;
			}

			/* The grid: Four equal columns that floats next to each other */
			.column {
				float: left;
				width: 25%;
				padding: 10px;
			}

			/* Style the images inside the grid */
			.column img {
				opacity: 0.8;
				cursor: pointer;
			}

			.column img:hover {
				opacity: 1;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* The expanding image container */
			.container {
				position: relative;
				display: none;
			}

			/* Expanding image text */
			#imgtext {
				position: absolute;
				bottom: 15px;
				left: 15px;
				color: white;
				font-size: 20px;
			}

			/* Closable button inside the expanded image */
			.closebtn {
				position: absolute;
				top: 10px;
				right: 15px;
				color: white;
				font-size: 35px;
				cursor: pointer;
			}
		</style>

	</head>

	<body>

		<!-- The columns -->
		<div class="container">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<img id="expandedImg" style="width:44.6%">
			<div id="imgtext"></div>
		</div>

		<div class="row">
			<div class="column">
				<img src="<?php echo($img1); ?>" style="width:80%" onclick="choose(this);">
			</div>
			<div class="column">
				<img src="<?php echo($img2); ?>" style="width:80%" onclick="choose(this);">
			</div>
			<div class="column">
				<img src="<?php echo($img3); ?>" style="width:80%" onclick="choose(this);">
			</div>
		</div>



		<script>
            function choose(imgs) {
                var expandImg = document.getElementById("expandedImg");
                var imgText = document.getElementById("imgtext");
                expandImg.src = imgs.src;
                imgText.innerHTML = imgs.alt;
                expandImg.parentElement.style.display = "block";
            }
		</script>

		</body>

</html>