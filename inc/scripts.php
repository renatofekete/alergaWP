<?php 
/* INCLUDE SCRIPTS AND STYLES */
function includeFiles()
{
	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
	wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Montserrat:400,700', array(), false);
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_stylesheet_uri() , array(), '1.0.0', 'all');
	wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.9/css/all.css', array());

}
add_action('wp_enqueue_scripts', 'includeFiles');
function includeAdminFiles()
{
	wp_enqueue_media();
	wp_register_script('adminuploader', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('adminuploader');
}
add_action('admin_enqueue_scripts', 'includeAdminFiles');
?>