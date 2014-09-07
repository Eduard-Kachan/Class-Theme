<?php 
	function theme_styles(){
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
		wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Oswald:700,400' );
		wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Istok+Web:400,400italic' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	add_theme_support('menus');

	register_sidebar( array(
		'id' => 'sidebar-right',
		'name' => 'Right Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
 ?>