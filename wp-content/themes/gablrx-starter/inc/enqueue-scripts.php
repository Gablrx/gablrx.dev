
<?php
function gablrx_enqueue_assets()
{
    /* wp_enqueue_style('gablrx-style', get_stylesheet_uri(), [], '1.0'); */
    // wp_enqueue_style('gablrx-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');
    wp_enqueue_style('gablrx-style', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css'));
    wp_enqueue_style('gablrx-animation-css', get_template_directory_uri() . '/assets/css/animations.css', [], filemtime(get_template_directory() . '/assets/css/animations.css'));
    wp_enqueue_style('contact-modal-style', get_template_directory_uri() . '/assets/css/contact-modal.css', [], filemtime(get_template_directory() . '/assets/css/contact-modal.css'));


    // Enqueue animations.js
    wp_enqueue_script('gablrx-animations', get_template_directory_uri() . '/assets/js/animations.js', [], null, true);

    // Enqueue de Particles.js
    wp_enqueue_script('particles-js', get_template_directory_uri() . '/node_modules/particles.js/particles.js', [], null, true);



    wp_enqueue_script('gablrx-script', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_template_directory() . '/assets/js/script.js'), true);

    // Contact modale
    wp_enqueue_script('contact-modal-js', get_template_directory_uri() . '/assets/js/contact-modal.js', array(), false, true);


    // Enqueue Fancybox CSS et JS
    wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', [], null);
    wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', [], null, true);

    // Enqueue 3D Tag Cloud JavaScript
    wp_enqueue_script('svg-3d-tag-cloud', get_template_directory_uri() . '/assets/js/SVG3DTagCloud.global.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'gablrx_enqueue_assets');
