<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Fillcode - tutoriales y tips web</title>
	<link rel="shorcut icon" href="<?php  bloginfo('template_url') ?>/img/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php  bloginfo('stylesheet_directory') ?>/css/style.min.css"  >
	
	<?php wp_enqueue_script('jquery') ?>
	<?php wp_head() ?>
</head>

<body>

	<!-- header the website -->
	<header class="header">
		<section class="header__logo">
			<h1 class="title"> <?php bloginfo('name') ?> </h1>
			<p class="legend"> <?php bloginfo('description') ?> </p>
			<a href="<?= home_url() ?>" class="link"></a>
		</section>

		<section class="header__sidebar">
			<?php dynamic_sidebar('sidebar-top') ?>
		</section>
		
		<span class="icon-menu" id="js_btn_menu"></span>
	</header>


	<?php 	
		wp_nav_menu([				
			'theme_location'  => 'header-nav',
			'container'       => 'nav',
			'container_class' => 'header__nav',
			'container_id'    => 'js_menu',
			'menu_class'      => 'menu',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			'depth'           => 0,
		]);
	?>
