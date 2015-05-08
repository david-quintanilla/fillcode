
<?php get_header() ?>


	<!-- content website -->
	<section class="container__posts">

		<?php if(have_posts()) : while (have_posts()) : the_post() ?>
			<article class="post">
				<header class="post__header">				
					<div class="type"> 
						<?php $categories = get_the_category() ?>
						
						<?php foreach($categories as $category): ?>		
							<span> 
								<?= $category->name ?> 
							</span>
						<?php endforeach ?> 
					</div>

					<figure class="post__image"> <?= the_post_thumbnail('medium') ?> </figure>

					<div class="info">
						<h2 class="title"> <?php the_title() ?> </h2>

						<a href="<?php the_permalink() ?>" class="link"></a>

						<div class="author">
							<span class="icon-user"></span> 
							<?php the_author() ?> - <?php the_date('d-m-Y') ?>
						</div>
					</div>
				</header>

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


<?php get_footer() ?>