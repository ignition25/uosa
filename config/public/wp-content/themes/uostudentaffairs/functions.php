<?php 

	function wpbootstrap_scripts_with_jquery() {
		// Register the script like this for a theme:
		wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'custom-script' );
	}

	add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

	// Thumbnail support.
	add_theme_support( 'post-thumbnails' ); 

	set_post_thumbnail_size( 49, 49, true );

	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'index-category-thumb', 300, 300, true );
	}

	// Main Sidebar declaration.
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'id' => 'sidebar',
			'name' => 'Main Sidebar',
			'before_widget' => '<li class="sidebar-item">',
			'after_widget' => '</li>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		));


	// Width of content areas, for best results the values echoed
	// by the next two functions should add up to 12.
	function main_content_columns() {
		// Number of columns for main content.
		echo 9;
	}

	function sidebar_content_columns() {
		// Number of columns for sidebar content.
		echo 3;
	}

	function page_header($title) {
		echo "<h1 class='page-title'>" . $title . "</h1>";
	}

	function category_image_path($term_id, $size) {
		if( get_field( "featured_image", "category_" . $term_id ) ) {
			$attachment_id = get_field( "featured_image",  "category_" . $term_id );
			echo wp_get_attachment_image_src( $attachment_id, $size )[0];			
		} 
	}

	function category_path($slug) {
		echo "/category/" . $slug . "/";
	}
?>
