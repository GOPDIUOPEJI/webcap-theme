<?php 
define( 'WP_USE_THEMES', false ); 

require( $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );

if($_POST['header_image'] != "" || $_POST['header_image'] == "" || $_POST['header_image'] != get_option('header_image')){
	if(update_option('header_image', $_POST['header_image']))
		return array('header_image' => 'updated');
}
