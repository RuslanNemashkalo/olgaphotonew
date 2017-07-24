<?php get_header(); ?>
<!-- start box -->
<div class="box">
	<!-- start container -->
    <div id="container">
    	<!-- start leftcol -->
        <div id="leftcol">

	<?php if (is_category()) { ?>
				<h3 class="result-heading"><?php _e('Posts tagged as',photographythemes); ?> &ldquo;<span><?php echo single_cat_title(); ?></span>&rdquo;</h3>        
			<?php } elseif (is_day()) { ?>
				<h3 class="result-heading"><?php _e('Archive',photographythemes); ?> | &ldquo;<span><?php the_time('F jS, Y'); ?></span>&rdquo;</h3>
			<?php } elseif (is_month()) { ?>
				<h3 class="result-heading"><?php _e('Archive',photographythemes); ?> | &ldquo;<span><?php the_time('F, Y'); ?></span>&rdquo;</h3>
			<?php } elseif (is_year()) { ?>
				<h3 class="result-heading"><?php _e('Archive',photographythemes); ?> | &ldquo;<span><?php the_time('Y'); ?></span>&rdquo;</h3>
			<?php } ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
        	<!-- post1 -->
            <div class="post listing">
            	<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="meta"><?php _e('Published'); ?> <?php the_time('F j, Y'); ?> <?php _e('in'); ?> <?php the_category(', ') ?></span>
                <div class="entry">
                	<?php the_excerpt(); ?>
                    <span class="more"><a href="<?php the_permalink();?>" title="<?php _e('Read the full post'); ?>"><?php _e('Read the full post'); ?></a></span>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- post1 -->
            
            
            	<?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
			} ?>
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