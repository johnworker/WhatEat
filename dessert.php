<?php
/** 
 * Template Name: dessert
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

    <!-- 主要內容 -->
    <main>
        <h2 class="title-word">甜點</h2>
        <img src="<?php bloginfo('template_directory') ?>/img/dessert1.jpg" alt="麵包">
        <div class="writings">
            <h3>麵包</h3>
            <p>麵包是一種用五穀（一般是麥類）磨粉製作並加熱而製成的食品。<br>
                小圓麵包是一種小而簡單易做的麵包，通常是甜的。
                小圓麵包通常介於小孩的拳頭和成人的手掌之間。</p>
        </div>
    </main>

    <!-- 區塊內容介紹 -->
    <section>
        <div class="boxing">
            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/dessert2.jpg" alt="甜甜圈">
                </div>
                <div class="text_box">
                    <h4>甜甜圈</h4>
                    <p>甜甜圈，中國大陸稱為甜甜圈，香港稱為冬甩，又稱圈餅、多拿滋、唐納滋，是一種用麵粉、砂糖、奶油和雞蛋混合後經過油炸的甜食。最普遍的兩種形狀是中空的環狀、或麵團中間有包入奶油、卡士達等甜餡料的封閉型甜甜圈。
                        在美國有許多人以甜甜圈作為早餐的主食，並設立有甜甜圈日。近期甜甜圈的口味跟種類發展十分快速，研發出形形色色的口味。在亞洲，甜甜圈主要是被當成點心類的食物。</p>
                </div>
            </div>

            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/dessert3.jpg" alt="鬆餅">
                </div>
                <div class="text_box">
                    <h4>鬆餅</h4>
                    <p>華夫餅又稱為格子鬆餅、比利時鬆餅、格仔餅、壓花蛋餅，是一種烤餅，源於比利時，用華夫餅烘烤模烤成。烤盤上下兩面呈格子狀，一凹一凸，把倒進去的麵糊（或麵糰）壓出格子來。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>