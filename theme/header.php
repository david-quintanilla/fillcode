<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Fillcode - tutoriales y tips web</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php  bloginfo('stylesheet_directory') ?>/css/style.min.css"  >

	<?php wp_enqueue_script('jquery') ?>
	<?php wp_head() ?>
</head>

<body>

	<!-- header the website -->
	<header class="header">
		<section class="header__section">
			<h1 class="title"> <?php bloginfo('name') ?> </h1>
			<p class="legend"> <?php bloginfo('description') ?> </p>
			<a href="<?= home_url() ?>" class="link"></a>
		</section>
		<span class="icon-menu" id="js_btn_menu"></span>
		<nav class="header__nav" id="js_menu">
			<ul class="menu">
				<li class="menu__item"> <span class="icon-stop"> </span> Tips </li>
				<li class="menu__item"> <span class="icon-stop"> </span> CSS </li>
				<li class="menu__item"> <span class="icon-stop"> </span> Contactanos </li>
			</ul>
		</nav>
	</header>