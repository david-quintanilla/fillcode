
<?php get_header() ?>

	<section class="container__single">
		<section class="container__post">	
			<!-- content post -->
			<section class="post">
				<h2 class="post__title"><?php single_post_title() ?></h2>
				<?php the_content() ?>
			</section>

			<hr>

			<!-- comments and form add comment -->
			<section class="post__comments">
				<?php disqus_comments('httpfillcodecom') ?>
			</section>
		</section>

		<!-- information best post, most visited, etc -->
		<section class="container__sidebars">		
			<aside class="aside__info">
				<?php dynamic_sidebar('sidebar-right') ?>
			</aside>
		</section>
	</section>

<?php get_footer() ?>