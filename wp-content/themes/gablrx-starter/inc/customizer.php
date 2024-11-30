<?php
function gablrx_customize_register($wp_customize)
{
    // Section pour les réseaux sociaux
    $wp_customize->add_section('gablrx_social_section', [
        'title' => __('Social Links', 'gablrx-starter'),
        'priority' => 30,
    ]);

    // Paramètre pour le lien GitHub
    $wp_customize->add_setting('gablrx_github_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Assure que le lien est bien formaté
    ]);

    $wp_customize->add_control('gablrx_github_link', [
        'label' => __('GitHub Link', 'gablrx-starter'),
        'section' => 'gablrx_social_section',
        'type' => 'url',
    ]);

    // Paramètre pour le lien LinkedIn
    $wp_customize->add_setting('gablrx_linkedin_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Assure que le lien est bien formaté
    ]);

    $wp_customize->add_control('gablrx_linkedin_link', [
        'label' => __('LinkedIn Link', 'gablrx-starter'),
        'section' => 'gablrx_social_section',
        'type' => 'url',
    ]);
}
add_action('customize_register', 'gablrx_customize_register');
