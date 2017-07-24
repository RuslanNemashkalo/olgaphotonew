<?php
/**
 * gallery taxonomy archive
*/
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<!-- start box -->

<div class="box">

	<!-- start container -->

    	<div id="container">

    	<!-- start gallery -->

    	<div class="gallery">

    		<h2 class="page-title"><?php echo apply_filters( 'the_title', $term->name ); ?> <?php _e('Photographs'); ?></h2>

        	<ul>
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
			
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<li><a href="<?php echo $image[0]; ?>" title="<?php the_title(); ?>" rel="gallery"><?php the_post_thumbnail('galleries-thumb', $thumb_attrs); ?></a></li>



            <?php endwhile; ?>

            </ul>
	
	
    	</div>

    	<!-- end gallery -->
	<div class="clear"></div>
	<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);} ?>
       

        <?php else: ?>

        <div class="entry">

			<p>It seems there isn't anything in <strong><?php echo apply_filters( 'the_title', $term->name ); ?></strong> right now. Please check back later.</p>

</div>

		<?php endif; ?>	
        <div class="clear"></div>

    </div>

    <!-- end container -->

<?php get_footer(); ?>