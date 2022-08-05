<?php
/** 
 * Template Name: form
 * 
 * 
*/
?>

<?php get_header(); ?>


    <!-- 導覽列 -->
    <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
        <div id="menu">
            <div class="mini-link-box">
                <ul class="mini-link">
                    <li>
                        <a href="<?php the_permalink(); ?>/index.php" class="mini-logo">{LEO}</a>
                    </li>
                    <li>
                        <div class="link-mini-work" href="">
                            美食簡介
                            <ul class="sub-mini-link">
                                <li>
                                    <a href="<?php the_permalink(); ?>/rice.php">飯類</a>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(); ?>/noodles.php">麵類</a>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(); ?>/snack.php">點心</a>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(); ?>/dessert.php">甜點</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/recommend.php">美食推薦</a>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/game.php">遊戲模式</a>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/contact.php" data-st-target="list" data-st-duration="1000"
                            data-st-offset="100">聯絡方式</a>
                    </li>
                </ul>
            </div>

        </div>
        <div></div>
        <div id="link">
            <div id="link-work" href="">
                美食簡介
                <ul class="sub-link">
                    <li>
                        <a href="<?php the_permalink(); ?>/rice.php">飯類</a>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/noodles.php">麵類</a>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/snack.php">點心</a>
                    </li>
                    <li>
                        <a href="<?php the_permalink(); ?>/dessert.php">甜點</a>
                    </li>
                </ul>
            </div>
            <a href="<?php the_permalink(); ?>/recommend.php">美食推薦</a>
            <a href="<?php the_permalink(); ?>/index.php" class="logo">{LEO}</a>
            <a href="<?php the_permalink(); ?>/game.php">遊戲模式</a>
            <a href="<?php the_permalink(); ?>/contact.php" data-st-target="list" data-st-duration="1000" data-st-offset="100">聯絡方式</a>
        </div>
        <div id="social">
            <a href="https://www.youtube.com/results?search_query=eat+what" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/instagram.png" alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png" alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/github.png" alt="github"></a>
        </div>
    </nav>

    <!-- 頁尾 -->
    <?php get_footer(); ?>