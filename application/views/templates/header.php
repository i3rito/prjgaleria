<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

	<head>

		<style>
			ul{
				list-style-type: none;
				background-color: #333333;
			}li {
				 float: left;
							 background-color: #333333;
			 } li a {
				color: red;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
		</style>
		<style>
			th{
				border: 1px solid #888888;
				text-align: center;
				padding: 10px;
			}
		</style>


	<title>H leria</title>

	</head>

	<body>

	<ul>
		<li>
			<a href="<?php echo base_url('home')?>">home</a>
		</li><li>
			<a href="<?php echo base_url('galleryList')?>">Galerias</a>
		</li><li>
			<a href="<?php echo base_url('about')?>">Sobre</a>
		</li>
	</ul>	<br>

