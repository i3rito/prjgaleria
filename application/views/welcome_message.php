<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hello World</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>


<div class="container">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!--			<ol class="carousel-indicators">-->
		<!--				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
		<!--				<li data-target="#myCarousel" data-slide-to="1"></li>-->
		<!--				<li data-target="#myCarousel" data-slide-to="2"></li>-->
		<!--			</ol>-->

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="border: 1px solid red;">
			<div class="item active">
				<img src="<?php echo($img1); ?>" alt="image 3" style="width:100%;">
			</div>

			<div class="item">
				<img src="<?php echo($img2); ?>" alt="image 3" style="width:100%;">
			</div>

			<div class="item">
				<img src="<?php echo($img3); ?>" alt="image 3" style="width:100%;">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<a href="<?php echo base_url('home') ?>" >Versão do Brito</a><br>
</body>

</html>
