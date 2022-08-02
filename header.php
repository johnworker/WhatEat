
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

<head>
<?php wp_head(); ?>
<meta name="viewport"content="width=device-width, initial-scale=1" />
</head>
<body>
