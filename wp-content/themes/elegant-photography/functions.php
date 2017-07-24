<?php

//Start photographyThemes Functions - Please refrain from editing this file.

$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/includes/';


// Options panel variables and functions

require_once ($functions_path . 'admin-setup.php');
// Custom functions and plugins

require_once ($functions_path . 'admin-functions.php');

// Thumbnails

add_theme_support('post-thumbnails');

set_post_thumbnail_size(958, 9999);

add_image_size('slide-background', 940, 580, true);
add_image_size('galleries-thumb', 283, 212, true);
add_image_size('recentpost-thumb', 200, 200, true);
add_image_size('page-thumb', 940, 400, true);

// Custom fields 
// require_once ($functions_path . 'admin-custom.php');

// More photographyThemes Page
require_once ($functions_path . 'admin-theme-page.php');

// Admin Interface!
require_once ($functions_path . 'admin-interface.php');

// Options panel settings
require_once ($includes_path . 'theme-options.php'); // What we do!

//Custom Theme Fucntions
require_once ($includes_path . 'theme-functions.php'); 

//Custom Comments
require_once ($includes_path . 'theme-comments.php'); 

// Load Javascript in wp_head
require_once ($includes_path . 'theme-js.php');

// Widgets  & Sidebars
require_once ($includes_path . 'sidebar-init.php');
require_once ($includes_path . 'theme-widgets.php');
add_action('wp_head', 'photographythemes_wp_head');
add_action('admin_menu', 'photographythemes_add_admin');
add_action('admin_head', 'photographythemes_admin_head');    

function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit+ 1));
 if(count($words) > $word_limit) {
  array_pop($words);
  //add a ... at last article when more than limitword count
  echo implode(' ', $words)."..."; } else {
 //otherwise
 echo implode(' ', $words); }
}

// Registering Menus For Theme
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav-menu' => __( 'Header' ),
	)
	);
}

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {

	register_post_type( 'slide',
		array(
		'labels' => array(
		'name' => __( 'Slides' ),
		'singular_name' => __( 'Slide' ),
		'add_new' => __( 'Add New' ),
		'add_new' => 'Add New Slide',
		'add_new_item' => __( 'Add New Slide' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit Slide' ),
		'new_item' => __( 'New Slide' ),
		'view' => __( 'View Slide' ),
		'view_item' => __( 'View Slides' ),
		'search_items' => __( 'Search Slides' ),
		'not_found' => __( 'No Slides found' ),
		'not_found_in_trash' => __( 'No Slides found in Trash' ),
		'parent' => __( 'Parent Slide' )
		),

'public' => true,
'supports' => array('thumbnail','title'),
'rewrite' => true,
'query_var' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post'
		)
	);

// Add Metaboxes for slider
function add_slide_metaboxes(){

	add_meta_box("slide_link", "Slide Link", "slide_metabox", "slide", "normal", "high");

}
add_action("admin_init", "add_slide_metaboxes");

// END // Add Metaboxes
// - - - - - - - - - - - - - - - - - - - - - - -
// Slide Link
function slide_metabox(){
	global $post;
	$custom = get_post_custom($post->ID);
	$slide_link = $custom["slide_link"][0];
	?>

    <label>Slide link:</label>
	<input name="slide_link" value="<?php echo $slide_link; ?>" style="width: 50%;" />
	<?php

}

// END // Slide Link

// - - - - - - - - - - - - - - - - - - - - - - -

// Save

function save_link($post_id) {

	global $post;

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {

	return $post->ID;

	} 

	update_post_meta($post->ID, "slide_link", $_POST["slide_link"]);

}

add_action('save_post', 'save_link');

// END // Save

register_post_type( 'photographs',

		array(



		'labels' => array(



		'name' => __( 'Photographs' ),



		'singular_name' => __( 'Photograph' ),



		'add_new' => __( 'Add New' ),



		'add_new' => 'Add New Photograph',



		'add_new_item' => __( 'Add New Photograph' ),



		'edit' => __( 'Edit' ),



		'edit_item' => __( 'Edit Photograph' ),



		'new_item' => __( 'New Photograph' ),



		'view' => __( 'View Photograph' ),



		'view_item' => __( 'View Photographs' ),



		'search_items' => __( 'Search Photographs' ),



		'not_found' => __( 'No Photographs found' ),



		'not_found_in_trash' => __( 'No Photographs found in Trash' ),



		'parent' => __( 'Parent Photograph' )







		),



'public' => true,



'supports' => array('thumbnail','title'),



'rewrite' => array( 'slug' => 'photographs', 'with_front' => true ),



'query_var' => true,



'exclude_from_search' => false,



'show_ui' => true,



'capability_type' => 'post'







		)







	);







register_taxonomy('gallery', 'photographs', array(



		



		'hierarchical' => true,



		



		'labels' => array(



			'name' => _x( 'gallery', 'taxonomy general name' ),



			'singular_name' => _x( 'gallery', 'taxonomy singular name' ),



			'search_items' =>  __( 'Search Galleries' ),



			'all_items' => __( 'All Galleries' ),



			'parent_item' => __( 'Parent Gallery' ),



			'parent_item_colon' => __( 'Parent Gallery:' ),



			'edit_item' => __( 'Edit Gallery' ),



			'update_item' => __( 'Update Gallery' ),



			'add_new_item' => __( 'Add New Gallery' ),



			'new_item_name' => __( 'New GalleryName' ),



			'menu_name' => __( 'Galleries' )



		),



		// Control the slugs used for this taxonomy



		'rewrite' => array(



			



			'slug' => 'gallery', 



			'with_front' => true, 



			'hierarchical' => true 



		),



	));







}







?>