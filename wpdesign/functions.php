<?php
/**
 * functions.php is the file where you can control all the logics behind your website
 * You can even change how WordPress works because this file is called very early in the process of building the pages
 *
 * @since 1.0.0
 * @version 1.0.0
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */

/**
 * whenever you see an add_action( 'moment', 'nameofthefunction' ) call it means we want to add a function with the name 'nameofthefunction' to the list of things to do in that 'moment'
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 */

/**
 * This function takes care of all the setup and functionalities that should be added to your theme
 */
function wpdesign_setup() {
	/**
	 * add_theme_support will be used to add some functionalities
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
	 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	 */
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wpdesign_setup' );

/**
 * enqueue scripts and styles the way WordPress wants them to be
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function wpdesign_styles(){
	// enqueue our style.css file
	wp_enqueue_style( 'wpdesign-reset', get_stylesheet_directory_uri().'/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'wpdesign-style', WPD_INCLUDES.'css/style.css', array( 'wpdesign-reset' ), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'wpdesign_styles' );

/**
 * Remove the default emoji styles slowing down the website
 *
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
