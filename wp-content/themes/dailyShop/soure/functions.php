<?php  





	
	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );

	//convert svg
	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');

	//add menu
	add_theme_support('menus');
	function register_my_menus() {
		$args = array( 
			'main-menu' => __( 'Main Menu' ),
		);
		register_nav_menus( $args );
		}
	add_action( 'init', 'register_my_menus' ); 

	//hook class active li in menu
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class ($classes, $item) {
	    if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'active ';
	    }
	    return $classes;
	}

	//add wigets
    function php_text($text) {
	 	if (strpos($text, '<' . '?') !== false) {
	    ob_start();
	    eval('?' . '>' . $text);
	    $text = ob_get_contents();
	    ob_end_clean();
	 }
	 return $text;
	 }
	add_filter('widget_text', 'php_text', 99);


	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Social',
	        'id'   => 'social',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Business hour',
	        'id'   => 'business_hour',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Phone',
	        'id'   => 'phone',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}

	//create post type services
	function  create_posttype()
	{
		$args = array(
	      'label' => 'Slide',//name of post type Slide
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'slide'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-format-gallery',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'slide', $args );
		$args = array(
	      'label' => 'Testimonials',//name of post type Testimonials
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'testimonials'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-format-quote',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'testimonials', $args );	
		$args = array(
	      'label' => 'Services',//name of post type Services
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'services'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-list-view',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'services', $args );				
	}
	add_action('init', 'create_posttype');

	//create taxonomy post type Slide
	function slide_taxonomy() {
        $labels = array(
                'name' => 'Slide Category',
                'singular' => 'Slide Category',
                'menu_name' => 'Slide Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('slide-category', 'slide', $args);   
    }
    add_action( 'init', 'slide_taxonomy' );
	//create taxonomy post type Testimonials
	function testimonials_taxonomy() {
        $labels = array(
                'name' => 'Testimonials Category',
                'singular' => 'Testimonials Category',
                'menu_name' => 'Testimonials Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('testimonials-category', 'testimonials', $args);   
    }
    add_action( 'init', 'testimonials_taxonomy' );
    //create taxonomy post type Services
	function services_taxonomy() {
        $labels = array(
                'name' => 'Services Category',
                'singular' => 'Services Category',
                'menu_name' => 'Services Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('services-category', 'services', $args);   
    }
    add_action( 'init', 'services_taxonomy' );

    add_action( 'wp_footer', 'redirect_cf7' );
	function redirect_cf7() {
	?>
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	       location = '<?php echo esc_url( home_url( '/thank-you' ) ); ?>';
	}, false );
	</script>
	<?php
	}


	function clean_commerce_child_custom_woo_fix() {

 		add_filter( 'woocommerce_show_page_title', '__return_true', 20 );
 		add_filter( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 6 );
 }

 add_action( 'init', 'clean_commerce_child_custom_woo_fix' );
