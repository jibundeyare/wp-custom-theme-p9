<?php

// chargement de l'autoloading de composer
require get_template_directory().'/vendor/autoload.php';

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

// choix du fuseau horaire
date_default_timezone_set( 'Europe/Paris' );
// choix du réglage régional
setlocale( LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1' );

function wpct_enqueue_styles() {
    // font awesome
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

    // google font
    wp_enqueue_style('google-font-style', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    // tailwind elements
    wp_enqueue_style('tailwind-elements-style', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css');

    // wp custom theme
    wp_enqueue_style('wpct-style', get_stylesheet_directory_uri().'/style.css', ['font-awesome-style', 'google-font-style', 'tailwind-elements-style']);
}
add_action('wp_enqueue_scripts', 'wpct_enqueue_styles', PHP_INT_MAX);

function wpct_enqueue_scripts() {
    // tailwind
    wp_enqueue_script('tailwind-script', 'https://cdn.tailwindcss.com');

    // tailwind elements
    // [] désigne les dépendances
    // false indique qu'il ne faut pas ajouter de numéro de version après le chemin du script
    // true indique que la balise script doit être placée juste avant la balise body fermante
    wp_enqueue_script('tailwind-elements-script', 'https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'wpct_enqueue_scripts', PHP_INT_MAX);

// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );
