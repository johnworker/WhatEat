<?php
/** 
 * Template Name: contact
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
                        <a href="./index.php" class="mini-logo">{LEO}</a>
                    </li>
                    <li>
                        <div class="link-mini-work" href="">
                            美食簡介
                            <ul class="sub-mini-link">
                                <li>
                                    <a href="./rice.php">飯類</a>
                                </li>
                                <li>
                                    <a href="./noodles.php">麵類</a>
                                </li>
                                <li>
                                    <a href="./snack.php">點心</a>
                                </li>
                                <li>
                                    <a href="./dessert.php">甜點</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="./recommend.php">美食推薦</a>
                    </li>
                    <li>
                        <a href="./game.php">遊戲模式</a>
                    </li>
                    <li>
                        <a href="./contact.php" data-st-target="list" data-st-duration="1000"
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
                        <a href="./rice.php">飯類</a>
                    </li>
                    <li>
                        <a href="./noodles.php">麵類</a>
                    </li>
                    <li>
                        <a href="./snack.php">點心</a>
                    </li>
                    <li>
                        <a href="./dessert.php">甜點</a>
                    </li>
                </ul>
            </div>
            <a href="./recommend.php">美食推薦</a>
            <a href="./index.php" class="logo">{LEO}</a>
            <a href="./game.php">遊戲模式</a>
            <a href="./contact.php" data-st-target="list" data-st-duration="1000" data-st-offset="100">聯絡方式</a>
        </div>
        <div id="social">
            <a href="https://www.youtube.com/results?search_query=eat+what" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/instagram.png" alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png" alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/github.png" alt="github"></a>
        </div>
    </nav>

    <h2 id="list" class="title-big" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500">聯絡我</h2>
    <!-- 表單元素 action="" 傳遞給後端頁面，通常是 XXX.php -->
    <!-- 要設定 input type="submit" 表單資料才會傳到後端-->
    <!-- 方法：傳送資料的方式 -->
    <!-- GET 曝光表單資料 -->
    <!-- POST 不會曝光表單資料 -->
    <form action="get.Massage.php" method="POST">
        <input type="text" name="user-name" placeholder="請輸入您的姓名" required>
        <input type="email" name="user-email" placeholder="請輸入您的信箱" required>
        <textarea placeholder="輸入你想對LEO說的話"></textarea>
        <input type="submit" value="送出" class="btn">
    </form>

    <!-- 頁尾 -->
    <?php get_footer(); ?>