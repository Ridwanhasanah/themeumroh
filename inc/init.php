<?php
/*Untuk Mendaftarkan JavaScript di Wordpres*/
function regishaji(){

    // Register the script like this for a theme:
    
	wp_enqueue_script( 'jsregis', get_stylesheet_directory_uri().'/inc/js/jquery-validation-1.17.0/dist/jquery.validate.min.js' );
	wp_enqueue_script( 'jsregis3', get_stylesheet_directory_uri().'/inc/js/jquery-migrate.js' );
	wp_enqueue_script( 'jsregis2', get_stylesheet_directory_uri().'/inc/js/hajiregistration.js');


	wp_enqueue_script('jsdate1', get_stylesheet_directory_uri().'/inc/js/datepicker.min.js');

}
add_action( 'wp_enqueue_scripts', 'regishaji' );


?>