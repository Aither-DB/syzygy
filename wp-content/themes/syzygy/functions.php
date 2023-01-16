<?php 

//Loading in scripts
function enqueue_syzygy_styles() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/static/js/bootstrap.bundle.min.js', array('jquery') );
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style( 'syzygy-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'enqueue_syzygy_styles' );

function customtheme_setup() {
    register_nav_menus(array(
            'primary' => __('Primary Menu', 'customtheme' )
    ));
    // Add theme support for document title tag
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'customtheme_setup');

?>

