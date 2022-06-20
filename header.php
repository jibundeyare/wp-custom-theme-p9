<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php
    if (is_front_page()):
        ?>
        <title>Accueil | <?php bloginfo( 'name' ); ?></title>
        <?php
    else:
        ?>
        <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
        <?php
    endif;
    ?>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>
                <a href="/ctg/cuisine-italienne/">Catégorie cuisine italienne</a>
            </li>
            <li>
                <a href="/ctg/cuisine-japonaise/">Catégorie cuisine japonaise</a>
            </li>
            <li>
                <a href="/tag/boeuf/">Étiquette boeuf</a>
            </li>
            <li>
                <a href="/tag/bouillon/">Étiquette bouillon</a>
            </li>
        </ul>
    </nav>