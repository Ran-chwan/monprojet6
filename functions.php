<?php
// Charger le style du thème parent
function mon_theme_enfant_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_enfant_styles' );
