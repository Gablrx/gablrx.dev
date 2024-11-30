
<?php
// Supprimer l'affichage des versions de WordPress :
function gablrx_remove_wp_version_strings($src)
{
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'gablrx_remove_wp_version_strings');
add_filter('style_loader_src', 'gablrx_remove_wp_version_strings');


// Autoriser les SVG
function gablrx_allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'gablrx_allow_svg_upload');

// Sanitize SVG
function gablrx_sanitize_svg($file)
{
    if ($file['type'] == 'image/svg+xml') {
        $file['ext'] = 'svg';
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}
add_filter('wp_check_filetype_and_ext', 'gablrx_sanitize_svg');
