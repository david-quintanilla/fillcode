<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Fillcode - tutoriales y tips web</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.min.css">
</head>
<body>

	<!-- header the website -->
	<header class="header">
		<section class="header__section">
			<h1 class="title">FillCode</h1>
			<p class="legend"> Tutoriales y tips web </p>
		</section>
		<span tabindex = "0" class="icon-menu"></span>
		<nav class="header__nav">
			<ul class="menu">
				<li class="menu__item"> <span class="icon-stop"> </span> Tips </li>
				<li class="menu__item"> <span class="icon-stop"> </span>CSS </li>
				<li class="menu__item"> <span class="icon-stop"> </span>Contactanos </li>
			</ul>
		</nav>
	</header>


	<!-- content website -->
	<section class="container__posts">


		<!-- 2 demo article -->
		<article class="post2">
			<figure class="post2__image">
				<div class="type"> <span>Jquery</span> </div>
				<img src="img/2.jpg" alt="wolf style">
				<div class="info">
					<h2 class="title"> Como montar una web </h2>
					<div class="author"><span class="icon-user"></span> David - 29/04/2015 </div>
				</div>
			</figure>			

			<footer class="post2__footer">
				<p class="content"> 
					Aprenderemos a crear un DIV facilmente usando CSS, con tan solo la propiedad
					after y before del pseudolemento...
				</p>
			</footer>
		</article>


		<article class="post">
			<div class="post__type"> <span>CSS</span> </div>
			<figure class="post__image">
				<img src="img/wolf.jpg" alt="wolf style">
				<div class="description"> 
					<p> Como crear un DIV en css facíl </p>
				</div>
			</figure>
			<p class="post__content">
				Aprenderemos a crear un DIV facilmente usando CSS, con tan solo la propiedad
				after y before del pseudolemento... 
			</p>
			<footer class="post__footer">
				<span class="icon-user"></span> David - 29/04/2015
			</footer>
		</article>	

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