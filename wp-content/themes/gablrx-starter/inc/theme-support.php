
<?php
function gablrx_theme_support()
{
    // Prise en charge des titres dynamiques
    add_theme_support('title-tag');
    // Prise en charge des images mises en avant
    add_theme_support('post-thumbnails');
    // Enregistrement des menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'gablrx-starter'),
    ]);
}
add_action('after_setup_theme', 'gablrx_theme_support');
