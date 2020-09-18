<?php
function মেইনথিমএরনাম_child_theme_styles() {
    wp_enqueue_style( 'মেইনথিম-style', get_template_directory_uri() . '/style.css', false );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'মেইনথিম-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'মেইনথিম_child_theme_styles');
?>
