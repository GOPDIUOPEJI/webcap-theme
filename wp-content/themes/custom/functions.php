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

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
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

/* Customizer */

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
?>
    <h1><?= get_admin_page_title(); ?></h1>

	<form id="update-theme-options" method="POST">
		<h2>Header options</h2>
    <?php 
    $image = 'Upload image';
	$image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
	$display = 'none'; // display state ot the "Remove image" button
	$placeholder = '<img id="image_placeholder" src="https://www.weareavp.com/wp-content/uploads/2017/07/Header-Image-Placeholder.jpg" style="max-height: 200px; max-width: 90%; display:none; margin-bottom: 20px" />';
	if(get_option('header_image')){
		$image = '<img class="true_pre_image" src="' . get_option('header_image') . '" style="max-width:95%;display:block;" />';
		$display = 'inline-block';
	} else {
		$button = 'button';
	}
 
 	?>
	<div>
		<?= $placeholder ?>
		<a href="#" style="margin-bottom: 10px;" class="upload_image_button <?= $button ?>"><?= $image ?></a>
		<input id="header_image" type="hidden" name="header_image" id="<?= $name ?>" value="<?= $value ?>" />
		<a href="#" class="remove_image_button" style="display:inline-block;display: <?= $display ?>">Remove image</a>
	</div>
	<input type="submit" class="button" value="Update" />
    </form> 
    <?php
}
    


