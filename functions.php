
<?php 
function theme_supports(){
    add_theme_support( 'menus' );
}

function register_script(){
    wp_register_style( 'style', 'style.css' );
    wp_enqueue_style( 'style');
}

function theme_init(){
    register_post_type( 'memoire', [
        'label' => 'Memoir',
        'public' => true,
        'show_in_rest' => true,
    ] );
}

add_action( 'init', 'theme_init' );
add_action( 'after_setup_theme', 'theme_supports' );
add_action('wp_enqueue_scripts', 'register_script' );




?>