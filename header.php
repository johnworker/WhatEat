
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
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet"/>
    <!-- slick CDN -->
    <link href="<?php bloginfo('template_directory') ?>//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet"  />

    <!-- bootstrap CDN -->
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap-reboot.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="<?php bloginfo('template_directory') ?>/css/elementor.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link href="<?php bloginfo('template_directory') ?>/style.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/rwd.css" rel="stylesheet" />

</head>

<head>
<?php wp_head(); ?>
<meta name="viewport"content="width=device-width, initial-scale=1" />
</head>
<body>
