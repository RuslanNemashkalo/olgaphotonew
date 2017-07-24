<?php get_header(); ?>
<!-- start box -->
<div class="box">
	<!-- start container -->
    <div id="container">
	<?php if ( has_post_thumbnail()) { ?>
    	<!-- start slider -->
        <div id="sliderin">
        
        	<?php the_post_thumbnail('page-thumb'); ?>
        </div>
        <!-- end slider -->
	<?php } ?>
    	<!-- start leftcol -->
        <div id="leftcol">
		<h2 class="post-title"><?php _e('Error 404',woothemes); ?></h2>
		<div class="entry">
			<p><?php _e('The page you are looking for does not exist. Please check the URL for typing errors, or'); ?> <a href="<?php bloginfo('home'); ?>" title="Go Home"><?php _e('head back home'); ?></a> <?php _e('and start over'); ?></p>
		</div>
        </div>
        <!-- end leftcol -->
        <!-- start rightcol -->
        <div id="rightcol">
        	<?php get_sidebar(); ?>
        </div>
        <!-- end rightcol -->
        <div class="clear"></div>
    </div>
    <!-- end container -->
<?php get_footer(); ?>

