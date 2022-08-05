    <!-- 頁尾 -->
    <footer>
        <div>
            <a href="" class="logo">{LEO}</a>
        </div>
        <small id="copy">
            &copy; LEO 2021.
        </small>
        <div id="link">
            <?php wp_nav_menu( array( 'theme_location' =>'primary-menu' ) ); ?>
        </div>
    </footer>

    <!-- data-st-top 箭頭要出現的高度 -->
    <!-- data-st-time 特效的持續時間 -->
    <a id="arrow" data-st-target="top" data-st-duration="800" data-st-top="300" data-st-time="1000"></a>


   

    <!-- AOS CDN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- slick CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>
</html>