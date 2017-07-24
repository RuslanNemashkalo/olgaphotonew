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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2 class="post-title"><?php the_title(); ?></h2>
                <span class="meta"><?php _e('Published'); ?> <?php the_time('F j, Y'); ?> <?php _e('in'); ?> <?php the_category(', ') ?></span>
                
                <div class="entry">
                    <?php the_content(); ?>
                </div>
                
                
            </div>
            <!-- end post -->
	<?php endwhile; ?>
                <?php endif; ?>
            
            <?php comments_template(); ?>
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