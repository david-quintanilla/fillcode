
<!-- header website -->
<?php get_header() ?>


	<!-- content website -->
	<section class="container__posts">

		<?php if(have_posts()) : while (have_posts()) : the_post() ?>
			<article class="post">
				<header class="post__header">	
					<h2 class="title"> <?php the_title() ?> </h2>

					<div class="type"> 
						<?php $categories = get_the_category() ?>
						
						<?php foreach($categories as $category): ?>		
							<span> 
								<?= $category->name ?> 
							</span>
						<?php endforeach ?> 
					</div>
				</header>

				<figure class="post__image"> <?= the_post_thumbnail('medium') ?> </figure>

				<div class="post__info">
					<a href="<?php the_permalink() ?>" class="link"> </a>

					<div class="author">
						<span class="icon-user"></span> 
						<?php the_author() ?> - <?php the_date('d/m/Y') ?>
					</div>
				</div>

				<footer class="post__footer"> <?= the_excerpt() ?> </footer>
			</article>
		<?php endwhile ?>
		<!-- post navigation -->
		<?php else: ?>
			<div class="no__items">
				<p>No existen posts</p>
			</div>
		<?php endif ?>

	</section>


<!-- footer website -->
<?php get_footer() ?>