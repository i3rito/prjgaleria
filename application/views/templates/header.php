<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

	<head>

		<title> hLeria </title>

		<meta name="author" content="Matheus Brito" />

		<meta name="copyright" content="© 2019 Brito" />

		<meta name="description" content="Implementação de um sistema gestor de galerias." />

		<meta name="keywords" content="hleria, matheus brito, i3rito" />

		<meta name="DC.Suject" content="hleria" />

		<meta name="robots" content="all" />

		<meta name="rating" content="general" />

		<meta name="DC.creator.address" content="matheusi3rito@gmail.com" />

		<meta name="DC.publisher" content="Matheus Brito" />

		<meta name="DC.date.created" content="2019-08-01" />

		<meta name="DC.date.modified" content="2020-01-22" />

		<meta name="DC.Identifier" content="matheusi3rito@gmail.com">

		<meta name="DC.format" content="text/html" />

		<meta http-equiv="cache-control" content="no-cache" />

		<meta http-equiv="content-language" content="pt-br, en-US" />

	<!--	<meta http-equiv="expires" content = "Thu, 17 apr 2019 11:30:00 GMT" />-->

	<!--	<meta http-equiv="refresh" content="30" />-->

		<meta http-equiv="imagetoolbar" content="no" />

		<meta http-equiv="content-script-type" content="text/javascript" />

		<meta http-equiv="content-style-type" content="text/css" />

		<meta property="og:title" content"Hleria"/>

		<meta property="og:url" content="http://http://ec2-18-189-180-157.us-east-2.compute.amazonaws.com/">

		<meta property="og:description" content="Implementação de um sistema gestor de galerias." />

		<meta charset="utf-8">

		<script src="/assets/js/scripts.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.min.css" />

		<script data-ad-client="ca-pub-1745545526296981" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156608514-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-156608514-1');
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156608514-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-156608514-1', { 'optimize_id': 'GTM-WDGRMJR'});
		</script>

	</head>

	<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<a class="navbar-brand text-light"> hLeria </a>
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
					<?php echo base_url()?>"
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
