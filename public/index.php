<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Fillcode - tutoriales y tips web</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.min.css">
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
		<article class="post">
			<figure class="post__image">
				<div class="type"> <span>Jquery</span> </div>
				<img src="img/3.jpg" alt="wolf style">
				<div class="info">
					<h2 class="title"> Como montar una web </h2>
					<div class="author"><span class="icon-user"></span> David - 29/04/2015 </div>
				</div>
			</figure>			

			<footer class="post__footer">
				<p class="content"> 
					Aprenderemos a crear un DIV facilmente usando CSS, con tan solo la propiedad
					after y before del pseudolemento...
				</p>
			</footer>
		</article>

		<!-- 2 demo article -->
		<article class="post">
			<figure class="post__image">
				<div class="type"> <span>Jquery</span> </div>
				<img src="img/1.jpg" alt="wolf style">
				<div class="info">
					<h2 class="title"> Display inline block </h2>
					<div class="author"><span class="icon-user"></span> David - 29/04/2015 </div>
				</div>
			</figure>			

			<footer class="post__footer">
				<p class="content"> 
					Esta magnifica propiedad y sus grandes beneficios, aprenderemos a usarla y saber 
					cuando es recomendada
				</p>
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