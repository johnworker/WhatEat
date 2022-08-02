
<!DOCTYPE html>
<html <?php language_attributes("zh"); ?>>
<head>
    <meta charset="<?php bloginfo('UTF-8');?>" />
    <title><?php
        if (is_home()) {
            bloginfo('吃什麼樂趣網站');
            echo ' - ';
            bloginfo('這是一個歡樂的吃什麼推薦網站');
        } else {
            wp_title(' - ', true, '吃什麼樂趣網站');
            bloginfo('吃什麼樂趣網站');
        } ?>
    </title>

    <!-- . 跟此檔案相同資料夾內的其他檔案 -->
    <!-- .. 在此檔案上一層資料夾內的其他檔案 -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8P8VER0LG8"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-8P8VER0LG8');
    </script>

</head>

<?php wp_head(); ?>
<meta name="viewport"content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php
    bloginfo( '/favicon.ico' ); ?>" />

<!-- AOS -->
<link rel="stylesheet" href="<?php
    bloginfo( 'https://unpkg.com/aos@next/dist/aos.css' ); ?>" />

<!-- slick CDN -->
<link rel="stylesheet" href="<?php
    bloginfo( '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ); ?>" />
<link rel="stylesheet" href="<?php
    bloginfo( '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' ); ?>" />
<!-- bootstrap CDN -->
<link rel="stylesheet" href="<?php
    bloginfo( 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' ); ?>" />

<link href="<?php
    bloginfo('template_directory') ?>/wp-content/themes/WhatEat" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        -->