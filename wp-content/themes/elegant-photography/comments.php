<?php

// Do not delete these lines



if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

die ('Не загружайте эту страницу напрямую. Благодаря!');

	if ( post_password_required() ) { ?>

	<p class="nocomments"><?php _e('Эта запись защищена паролем. Введите пароль, чтобы увидеть комментарии.',photographythemes); ?></p>

	<?php

		return;

	}

	?>

<!-- You can start editing here. -->

<div id="comments">

	<h4><?php comments_number(__('Нет коментарий',photographythemes), __('1 ответ',photographythemes), __('% ответы',photographythemes) );?> &#8220;<?php the_title(); ?>&#8221;</h4>

<!-- <a href="#respond" class="res">Leave a Reply</a> -->

	<div class="clear"></div>

	<?php if ( have_comments() ) : ?>

	<ol class="commentlist">

		<?php wp_list_comments('avatar_size=58&type=comment&callback=custom_comment&type=comment'); ?>

	</ol>    

	<div class="navigation">

		<div class="alignleft"><?php previous_comments_link() ?></div>

		<div class="alignright"><?php next_comments_link() ?></div>

	<div class="fix"></div>

</div>

	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>

	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->

	<p class="nocomments"><?php _e('Комментарии закрыты.',photographythemes); ?></p>

	<?php endif; ?>

<?php endif; ?>

</div> <!-- end #comments_wrap -->

<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

	<h4>Leave a Comment</h4>

	<div class="cancel-comment-reply">

	<small><?php cancel_comment_reply_link(); ?></small>

</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p><?php _e('Ты должен быть зарегистрирован',photographythemes); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('что бы',photographythemes); ?></a> <?php _e('оставлять коментарии.',photographythemes); ?></p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>



<label><?php _e('Записан',photographythemes); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Выйти из этой учетной записи"><?php _e('Выйти &raquo;',photographythemes); ?></a></label>



<?php else : ?>



<label for="author"><?php _e('Имя',photographythemes); ?></label>

<input type="text" class="input" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" />



<label for="email"><?php _e('Email',photographythemes); ?></label>

<input type="text" class="input" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />



<label for="url"><?php _e('Веб-сайт',photographythemes); ?></label>

<input type="text" class="input" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />



<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<label for="comment"><?php _e('Коментарий',photographythemes); ?></label>

<textarea name="comment" id="comment" tabindex="4" rows="" cols="" class="textarea"></textarea>

<div class="clear"></div>

<input name="submit" type="submit" class="button" id="submit" tabindex="5" value="submit" />

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php comment_id_fields(); ?>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If logged in ?>

<div class="fix"></div>

</div> <!-- end #respond -->

<?php endif; // if you delete this the sky will fall on your head ?>