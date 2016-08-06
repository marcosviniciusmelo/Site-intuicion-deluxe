<?php
/**
 * Enqueue scripts and styles.
 */
function _theme_assets() {
    wp_enqueue_style( '_theme-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( '_theme-slick', get_template_directory_uri() . '/css/slick.css');

    wp_enqueue_script( '_theme-js-functions', get_template_directory_uri() . '/js/functions.js', array(), null, true );
    wp_enqueue_script( '_theme-js-instagram', get_template_directory_uri() . '/js/instagram.js', array(), null, false );
    wp_enqueue_script( '_theme-js-slick', get_template_directory_uri() . '/js/slick.js', array(), null, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_theme_assets' );
