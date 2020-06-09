<?php

// Adding CSS 
function load_css () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_css' );

// Adding Custom Fonts np. Google Fonts
function add_google_fonts() {
	wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:400,500,600&display=swap&subset=latin-ext' );
  }
  add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// Adding JS
function load_js() {
    wp_enqueue_script( 'build.min.js', get_template_directory_uri() . '/js/min/build.min.js', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_js' );

// include jQuery CDN
// function shapeSpace_include_custom_jquery() {

// 	wp_deregister_script('jquery');
// 	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

// }
// add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

// Activate HTML5 features/support
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );

// // Adding thmubnails support in posts
// add_theme_support( 'post-thumbnails' );

// include Font Awesome
function prefix_enqueue_awesome() {
	wp_enqueue_style( 
		'font-awesome-5', 
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css', 
		array(), 
		'5.12.1' 
	);
}
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

// ///////////////////////////////////////////////////////////////////
	// REMOVING WP LEFT MENU FOR USER 
	///////////////////////////////////////////////////////////////////
	// Removing left menu items on WP admin dashbord ~ DEFAULT ITEMS
	add_action( 'admin_menu', 'remove_menu_pages' );
	function remove_menu_pages() {
		remove_menu_page('edit.php'); // Wpisy
		remove_menu_page('upload.php'); // Media
		remove_menu_page('link-manager.php'); //Odnośniki
		remove_menu_page('edit-comments.php'); // Komentarze    
		remove_menu_page('edit.php?post_type=page'); // Strony
		remove_menu_page('plugins.php'); // Wtyczki
		remove_menu_page('themes.php'); // Wygląd
		remove_menu_page('users.php'); // Użytkownicy
		remove_menu_page('tools.php'); // Narzędzia
		remove_menu_page('options-general.php'); // Ustawienia
	}

	// Removing left menu items on WP admin dashbord ~ All-in-One WP Migration Admin Menu
	function plt_hide_all_in_one_wp_migration_menus() {
		//Hide "All-in-One WP Migration".
		remove_menu_page('ai1wm_export');
		//Hide "All-in-One WP Migration → Export".
		remove_submenu_page('ai1wm_export', 'ai1wm_export');
		//Hide "All-in-One WP Migration → Import".
		remove_submenu_page('ai1wm_export', 'ai1wm_import');
		//Hide "All-in-One WP Migration → Backups".
		remove_submenu_page('ai1wm_export', 'ai1wm_backups');
	}

	add_action('admin_menu', 'plt_hide_all_in_one_wp_migration_menus', 11);

	function wpse28782_remove_menu_items() {
		if( !current_user_can( 'administrator' ) ):
			remove_menu_page( 'edit.php?post_type=your_post_type' );
		endif;
	}
	add_action( 'admin_menu', 'wpse28782_remove_menu_items' );

	// Removing left menu items on WP admin dashbord ~ CPF
	remove_action( 'admin_menu', 'cptui_plugin_menu' );

	// Removing left menu items on WP admin dashbord ~ ACF
	add_filter('acf/settings/show_admin', '__return_false');

	//Hide the "WP Fastest Cache" menu.
	function plt_hide_wp_fastest_cache_menus() {
		
		remove_menu_page('wpfastestcacheoptions');
	}
	
	add_action('admin_menu', 'plt_hide_wp_fastest_cache_menus', 11);

	//Hide the "Smush"
	function plt_hide_wp_smushit_menus() {
		//Hide the "Smush" menu.
		remove_menu_page('smush');
		//Hide the "Smush → Dashboard" menu.
		remove_submenu_page('smush', 'smush');
		//Hide the "Smush → Smush Pro" menu.
		remove_submenu_page('smush', 'smush-upgrade');
	}
	
	add_action('admin_menu', 'plt_hide_wp_smushit_menus', 11);

	/* Remove Contact Form 7 Links from dashboard menu items if not admin */
    if (!(current_user_can('administrator'))) {
		function remove_wpcf7() {
			remove_menu_page( 'wpcf7' ); 
		}
	
		add_action('admin_menu', 'remove_wpcf7');
		 }

