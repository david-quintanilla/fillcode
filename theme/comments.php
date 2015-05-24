

<?php if($comments) : ?>
  	<?php foreach($comments as $comment) : ?>
  		<div id="comment-<?php comment_ID() ?>" class="comment"> 
  			<div class="comment__header">
  				<div class="icon">   <?= get_avatar($comment, '60'); ?>  </div>
				<div class="author"> <?php comment_author_link() ?>    </div>
				<div class="date">   <?php comment_date('d-m-Y') ?>    </div>
  			</div> 			
  			<div class="comment__content">
				<?php comment_text() ?>
  			</div>
  		</div>
	<?php endforeach ?>
<?php endif ?>



<!-- form add comment -->
<?php if(comments_open()) : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if($user_ID) : ?>
			<p>
				Logged in as 
				<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>
				<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">
				Log out &raquo;</a>
			</p>
		<?php else : ?>
			<p>
				<input type="text" name="author" id="author" value="" placeholder="* nombre"/>
			</p>
			<p>
				<input type="text" name="email" id="email" value="" placeholder="* correo (no será publicado)" />
			</p>
			<p>
				<input type="text" name="url" id="url" value="" placeholder="website"/>
			</p>
		<?php endif ?>

		<p>
			<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
		</p>
		<p>
			<input name="submit" type="submit" id="submit" value="Enviar" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</p>

		* Tu comentario sera mostrado una vez sea validado por el administrador.
		<?php do_action('comment_form', $post->ID); ?>
	</form>
<?php else : ?>
	<p>Los comentarios para este post estan desactivados.</p>
<?php endif ?>