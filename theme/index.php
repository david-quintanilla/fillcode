<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Fillcode - tutoriales y tips web</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php  bloginfo('stylesheet_directory') ?>/css/style.min.css"  >
</head>
<body>

	<!-- header the website -->
	<header class="header">
		<section class="header__section">
			<h1 class="title"> <?php bloginfo('name') ?> </h1>
			<p class="legend"> <?php bloginfo('description') ?> </p>
		</section>
		<span tabindex = "0" class="icon-menu"></span>
		<nav class="header__nav">
			<ul class="menu">
				<li class="menu__item"> <span class="icon-stop"> </span> Tips </li>
				<li class="menu__item"> <span class="icon-stop"> </span> CSS </li>
				<li class="menu__item"> <span class="icon-stop"> </span> Contactanos </li>
			</ul>
		</nav>
	</header>


	<!-- content website -->
	<section class="container__posts">

		<?php if( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<article class="post">
				<figure class="post__image">
					<div class="type"> 
						<?php 
							$categories = get_the_category();

							foreach($categories as $category): 
						?>		
							<span> <?= $category->name ?> </span>

						<?php endforeach ?> 
					</div>
					<?= get_the_post_thumbnail($post_id, 'thumbnail') ?>
					<div class="info">
						<h2 class="title"> <?php the_title() ?> </h2>
						<div class="author">
							<span class="icon-user"></span> 
							<?php the_author() ?> - <?php the_date('d-m-Y') ?>
						</div>
					</div>
				</figure>			

				<footer class="post__footer">
					<p class="content"> <?php the_content() ?></p>
				</footer>
			</article>
		<?php endwhile ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif ?>

	</section>


	<!-- footer website -->
	<footer class="footer">
		<div class="footer__social">
			<a href=""><span class="icon-twitter"></span></a>
			<a href=""><span class="icon-facebook"></span></a>
			<a href=""><span class="icon-twitter"></span></a>
			<a href=""><span class="icon-google-plus"></span></a>
		</div>
		<div class="footer__copyright">
			<p>
				&copy; 2015. Fillcode<br> 
				Todos los derechos reservados.
			</p>
		</div>
	</footer>
</body>
</html>