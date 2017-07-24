<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Search Results',photographythemes); ?><?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Author Archives',photographythemes); ?><?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Archive',photographythemes); ?>&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Archive',photographythemes); ?>&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php _e('Tag Archive',photographythemes); ?>&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
<?php if ( is_tax() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  $term_title = $term->name; echo "$term_title"; ?><?php } ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/slider/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/colorbox/colorbox.css" type="text/css" media="screen" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" media="screen" />
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('photography_feedburner_url') <> "" ) { echo get_option('photography_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php echo get_option( 'photography_exscripts' ); ?>
<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".gallery a").colorbox({ rel:'gallery', maxHeight: '<?php echo get_option( 'photography_cb_height' ); ?>', maxWidth: '<?php echo get_option( 'photography_cb_width' ); ?>'});
});
</script>

</head>
<body>

<!-- start hedaer -->

<div id="header">

<div class="box">
	<!-- logo -->
	<div id="logo">

    	<div><span><a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('title'); ?>"><?php if ( get_option( 'photography_logo' ) <> "" ) { ?><img src="<?php echo get_option( 'photography_logo' ); ?>" alt="logo" /><?php } else { ?><?php bloginfo('title'); ?><?php } ?></a></span></div>

    </div>
    
    <!-- logo -->
    <!-- navigation -->
    <div id="navigation">
    	<?php wp_nav_menu (array ( 'theme_location' => 'main-nav-menu') ); ?>
    </div>
    <!-- navigation -->
</div>
</div>