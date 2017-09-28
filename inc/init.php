<?php
/*Untuk Mendaftarkan JavaScript di Wordpres*/

/*======== Script untuk FrontEnd Start =========*/
function regishaji(){

    // Register the script like this for a theme:
    
	wp_enqueue_script( 'jsregis', get_stylesheet_directory_uri().'/inc/js/jquery-validation-1.17.0/dist/jquery.validate.min.js' );
	wp_enqueue_script( 'jsregis3', get_stylesheet_directory_uri().'/inc/js/jquery-migrate.js' );
	wp_enqueue_script( 'jsregis2', get_stylesheet_directory_uri().'/inc/js/hajiregistration.js');


	wp_enqueue_script('jsdate1', get_stylesheet_directory_uri().'/inc/js/datepicker.min.js');

}
add_action( 'wp_enqueue_scripts', 'regishaji' );

/*======== Script untuk FrontEnd End =========*/

/*======== Script untuk BackEnd Start =========*/
function styleJs(){
	
	wp_enqueue_style('admincss',get_stylesheet_directory_uri().'/inc/css/adminCss.css');

	wp_enqueue_script('jsbackend',get_stylesheet_directory_uri().'/inc/js/jsAdminBackend.js');
	wp_enqueue_script( 'jsbackend2', get_stylesheet_directory_uri().'/inc/js/jquery-migrate.js' );
}

add_action('admin_enqueue_scripts','styleJs' );
/*======== Script untuk BackEnd End =========*/



function settingFormMenu(){

	add_theme_page( 
		'settingFormMenu',
		'Setting Form', 
		'manage_options',
		'settingForm',
		'pendaftaranFormSetting');
}

add_action('admin_menu','settingFormMenu' );
function pendaftaranFormSetting(){
	require_once('pendaftaran/settingOptionForm.php');
	require_once('pendaftaran/view/settingFormPendaftaran.php');
}
?>