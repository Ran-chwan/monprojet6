<?php
function twentytwentyfour_child_setup() {
    register_nav_menus([
        'menu-principal' => __('Menu principal', 'twentytwentyfour_child'),
        'menu-header' => __('Menu Header', 'twentytwentyfour_child'), 
        'menu-footer' => __('Menu Footer', 'twentytwentyfour_child'), 
    ]);
}
add_action('after_setup_theme', 'twentytwentyfour_child_setup');
?>
