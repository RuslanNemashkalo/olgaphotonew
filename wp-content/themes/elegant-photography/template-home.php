<?php

/*

Template Name: Home

*/

?>



<?php get_header(); ?>

<!-- start showcase -->

<div id="showcase">

	<div class="box">

    	<div id="slideshow">

        <script type="text/javascript">

		jQuery(window).load(function() { jQuery('#slider').nivoSlider({ effect: '<?php if (get_option('photography_slideshow_effect') != "") { echo get_option('photography_slideshow_effect'); } else { echo random; } ?>', slices: 5, boxCols: 5, boxRows: 5, animSpeed: 700, directionNav: false, controlNav: true, pauseTime: <?php if (get_option('photography_slideshow_pausetime') != "") { echo get_option('photography_slideshow_pausetime'); } else { echo 7000; } ?> }); });

		</script>

		<!-- slider -->

        <div id="slider" class="nivoSlider theme-default">

   		<?php $query = new WP_Query(); $query->query('post_type=slide'); $post_count = $query->post_count; $count = 0;



				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); $captions[] = '<h2>'.get_the_title($post->ID).'</h2><p>'.get_the_content().'</p>'; $thumb_attrs = array( 'title' => '#caption'.$count );



				?>



				<?php if ( get_post_meta($post->ID, 'slide_link', true) ) { ?>



				<?php if ( has_post_thumbnail()) { ?>

                <a href="<?php echo get_post_meta($post->ID, 'slide_link', true); ?>" title="<?php the_title(); ?>" class="imagelink"><?php the_post_thumbnail('slide-background', $thumb_attrs); ?></a>



				<?php } ?>



				<?php } else { ?>



					<?php if ( has_post_thumbnail()) { ?>

        	<?php the_post_thumbnail('slide-background'); ?>



					<?php } ?>



					<?php } ?>



					<?php $count++; endwhile; endif; ?>

        </div>

        <!-- slider -->

	</div>

    </div>

</div>

<!-- end showcase -->

<!-- start box -->



<div class="box">

 

	<!-- start container -->

    <div id="container">

	<?php query_posts(array('posts_per_page' => 4)); ?>

       

    	<!-- post thumbnail -->

        <div class="post-thumbnail">

            <h2>Вам будет интересно:</h2>

            <ul> 

		 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

         	<li>

                    <a href="<?php the_permalink(); ?>" title="<?php bloginfo('title'); ?>"> 

                	<?php if ( has_post_thumbnail()) { ?><div class="imgb"><?php the_post_thumbnail('recentpost-thumb'); ?></div><?php } ?>

                    <strong><?php the_title(); ?></strong>

					<?php the_time('F j, Y'); ?>

                	</a></li>

        	

        	<?php endwhile; ?>

            

            </ul>

        	<div class="clear"></div>

        </div>

	   

        <!-- post thumbnail -->

<?php endif; ?>

            <?php wp_reset_query(); ?>

	

        <div class="clear"></div>

   </div>  

    <!-- end container -->

<?php get_footer(); ?>