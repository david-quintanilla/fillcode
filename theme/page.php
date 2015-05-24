


<?php get_header() ?>

	<section class="container__single">
		<section class="container__form">
			<h2 class="form__title"><?php single_post_title() ?></h2>
			<?php the_content() ?>
		</section>

		<section class="container__sidebars">		
			<aside class="aside__info">
				<?php dynamic_sidebar('sidebar-right') ?>
			</aside>
		</section>
	</section>

<?php get_footer() ?>