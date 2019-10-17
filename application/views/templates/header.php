<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

	<head>
		<script src="/assets/js/scripts.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.min.css" />
		<title>hLeria</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="
					<?php echo base_url('home')?>"
				class="nav-link
					<?php echo $navActive == 'home' ? 'active' : '';?>
				">Home</a>
			</li>
			<li class="nav-item">
				<a href="
					<?php echo base_url('galleryList')?>"
				   class="nav-link
					<?php echo $navActive == 'galleryList' ? 'active' : '';?>
				">Galerias</a>
			</li>
			<li class="nav-item ">
				<a href="
					<?php echo base_url('about')?>"
				   class="nav-link
					<?php echo $navActive == 'about' ? 'active' : '';?>
				">Sobre</a>
			</li>
		</ul>
	</nav>

	<br>
