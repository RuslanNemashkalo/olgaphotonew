<?php
/*
Template Name: Full Width
*/
?>

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
    	<!-- start fullwidth -->
        <div id="fullwidth">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- start post -->
            <div class="post">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <!-- entry1 -->
                <div class="entry">
                    <?php the_content(); ?> 
                </div>
                <!-- entry -->
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- end post -->
        </div>
        <!-- end fullwidth -->
       
        <div class="clear"></div>
    </div>
    <!-- end container -->
<?php get_footer(); ?>