<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';





if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//Exerpt Length Control

function set_excerpt_length(){
return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');
add_theme_support( 'post-thumbnails' );

function wpb_init_widgets($id){
	register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
	));

    register_sidebar(array(
    'name' => 'Box1',
    'id' => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

        register_sidebar(array(
    'name' => 'Box2',
    'id' => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

            register_sidebar(array(
    'name' => 'Box3',
    'id' => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

                register_sidebar(array(
    'name' => 'Концерты',
    'id' => 'concerts',
    'before_widget' => '<div class="concerts">',
    'after_widget' => '</div>',
    'before_title' => '<div class="information-title">',
    'after_title' => '</div>'
    ));
}


add_action('widgets_init', 'wpb_init_widgets');

add_theme_support('post-formats', array('gallery', 'aside'));

//Customizer File 
require get_template_directory(). '/inc/customizer.php';


// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Читать далее &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

   add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/bootstrap.css" );
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/bootstrap-responsive.css" );
}