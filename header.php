
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        if (is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
        } else {
            wp_title(' - ', true, 'right');
            bloginfo('name');
        } ?>
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.ico" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- slick CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- <link href="<?php bloginfo('template_directory') ?>/css/elementor.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

    <link href="<?php bloginfo('template_directory') ?>/css/Flip.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/dice.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/game_rwd.css" rel="stylesheet" />

</head>

<head>
<?php wp_head(); ?>
<meta name="viewport"content="width=device-width, initial-scale=1" />
</head>
<body>
