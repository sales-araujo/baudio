<?php
// functions.php do tema BAudio

// Suporte ao título dinâmico
add_theme_support('title-tag');

// Suporte a imagens destacadas
add_theme_support('post-thumbnails');

// Carregar o style.css do tema
function baudio_enqueue_styles() {
    wp_enqueue_style('baudio-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'baudio_enqueue_styles');

// Permitir upload de SVG (opcional)
function baudio_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'baudio_mime_types'); 