<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

	<head>

		<title>H legria</title>

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
				overflow: hidden;
				height: 172px;
				width: 300px;
			}
		</style>


	</head>


	<body>

		<a href="<?php echo base_url('welcome'); ?>" >Versão do bootstrap</a>

		<h1><?php echo $title; ?></h1>
