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

	function is_pinned_to_front($term_id) {
		if ( get_field("pin_to_index_page", "category_" . $term_id )[0] == true ) {
			return true;
		} else {
			return false;
		}
	}

	function category_path($slug) {
		echo "/category/" . $slug . "/";
	}

	// Pin categories to Index.php.
	if(function_exists("register_field_group")) {
		register_field_group(array (
			'id' => 'acf_pin_categories',
			'title' => 'PinCategories',
			'fields' => array (
				array (
					'key' => 'field_52a90a462ded6',
					'label' => 'Pin to Index Page?',
					'name' => 'pin_to_index_page',
					'type' => 'checkbox',
					'choices' => array (
						'true' => 'yes',
					),
					'default_value' => '',
					'layout' => 'horizontal',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'ef_taxonomy',
						'operator' => '==',
						'value' => 'all',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}


	// Category featured images.
	if(function_exists("register_field_group")) {
		register_field_group(array (
			'id' => 'acf_categories',
			'title' => 'Categories',
			'fields' => array (
				array (
					'key' => 'field_52a529e9ba299',
					'label' => 'Featured Image',
					'name' => 'featured_image',
					'type' => 'image',
					'instructions' => 'Shown on category page.',
					'save_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'ef_taxonomy',
						'operator' => '==',
						'value' => 'all',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}
?>
