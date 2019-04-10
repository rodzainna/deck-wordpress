<?php

function year_of_tolerance_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-app-style', get_template_directory_uri() .'/public/css/app.css' );

	wp_enqueue_style( 'main-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Oswald:200,300,400,500,600,700' );

	wp_enqueue_script( 'main-app-js', get_template_directory_uri() .'/public/js/app.js', [], '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'year_of_tolerance_scripts' );