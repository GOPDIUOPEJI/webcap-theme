<?php 

function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'right_sidebar', // уникальный id
			'name' => 'Right Sidebar', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'class'         => '',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );

add_shortcode( 'copyright', 'the_copyright' );

function the_copyright() {
	echo date('Y') . " All Rights Reserved";
}

function include_script() {
	/*
	 * I recommend to add additional conditions just to not to load the scipts on each page
	 * like:
	 * if ( !in_array('post-new.php','post.php') ) return;
	 */
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
 
 	wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/app/js/adminscripts.js', array('jquery'), null, false );
}
 
add_action( 'admin_enqueue_scripts', 'include_script' );

// add_action('customize_register', function($customizer){
//     $customizer->add_section(
//         'header_customize',
//         array(
//             'title' => 'Header',
//             'description' => 'Customize header',
//             'priority' => 11,
//         )
//     );
// 	$customizer->add_setting('img-upload');
// 	$customizer->add_control(
// 	    new WP_Customize_Image_Control(
// 	        $customizer,
// 	        'img-upload',
// 	        array(
// 	            'label' => 'Set header image',
// 	            'section' => 'header_customize',
// 	            'settings' => 'img-upload'
// 	        )
// 	    )
// 	);
// });

/* add custom menu page */

add_action( 'admin_menu', 'add_custom_theme_options' );
add_filter( 'option_page_capability_' . 'custom_theme_options', 'my_page_capability' );

// Добавим видимость пункта меню для Редакторов
function add_custom_theme_options(){
	add_menu_page( 'Theme options', 'Theme options', 'edit_theme_options', 'custom_theme_options', 'theme_options_form'); 
}

// Изменим права
function my_page_capability( $capability ) {
	return 'edit_theme_options';
}



function theme_options_form() {
    /* Not sure about this global var */
    //global $_nav_menu_placeholder;
    //$_nav_menu_placeholder = ( 0 > $_nav_menu_placeholder ) ? intval($_nav_menu_placeholder) - 1 : -1;?>
    <h1><?= get_admin_page_title(); ?></h1>
    <h2>Header options</h2>

	<form id="update-theme-options" method="POST">
		<h2>Header options</h2>
        <!-- <p id="menu-item-custom-box">
            <label class="howto" for="header_image">
                <span><?php _e('URL'); ?></span>
                <input id="custom-menu-item-custom-box" name="header_image" type="file" class="code menu-item-textbox" />
            </label>
        </p> -->
    <?php 
    $image = 'Upload image';
	$image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
	$display = 'none'; // display state ot the "Remove image" button
 
	if( $image_attributes = wp_get_attachment_image_src( $value, $image_size ) ) {
 
		// $image_attributes[0] - image URL
		// $image_attributes[1] - image width
		// $image_attributes[2] - image height
 
		$image = '"<img src="' . $image_attributes[0] . '" style="max-width:95%;display:block;" />';
		$display = 'inline-block';
 
	} 
 	?>
	<div>
		<a href="#" class="upload_image_button"><?= $image ?></a>
		<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
		<a href="#" class="remove_image_button" style="display:inline-block;display: <?= $display ?>">Remove image</a>
	</div>
	<input type="submit" value="Update" />
    </form> 
    <?php
}
    


