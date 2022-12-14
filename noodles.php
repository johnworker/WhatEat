<?php
/** 
 * Template Name: noodles
 * 
 * 
*/
?>

<?php get_header(); ?>


    <!-- 導覽列 -->
    <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
    <div class="btn_box">
        <div class="menu_wrap">
            <?php wp_nav_menu( array( 'theme_location' =>'primary-menu' ) ); ?>
        </div>

        <div class="menu_btn">
            <span></span><span></span><span></span>
        </div>
    </div>
            <div class="sub_btn_box">
                <div class="sub_menu_wrap">
                    <?php wp_nav_menu( array( 'theme_location' =>'sub-menu' ) ); ?>
                </div>

                <div class="sub_menu_btn">
                    <img src="<?php bloginfo('template_directory') ?>/img/once_cake.png" alt="蛋糕">
                </div>
            </div>

        <div id="menu">
            <?php wp_nav_menu( array( 'theme_location' =>'primary-menu' ) ); ?>
            <div class= "sub_menu">
                    <?php wp_nav_menu( array( 'theme_location' =>'sub-menu' ) ); ?>
            </div>
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
        <h2 class="title-word">麵</h2>
        <img src="<?php bloginfo('template_directory') ?>/img/noodle1.jpg" alt="麵">
        <div class="writings">
            <h3>麵條</h3>
            <p>麵條，一種用穀物或豆類的麵粉加水和成麵團，之後或者壓或擀製成片再切或壓，或者使用搓、拉、捏等手段，製成條狀（或窄或寬，或扁或圓）或小片狀的食品。可再經煮、炒、燴、炸等烹調方式食用。<br>
                關於麵條的最早文字記錄在中國東漢時期，2005年時，中國社會科學院考古研究所研究員葉茂林在青海省的喇家遺址中發現了距今4,000年以上歷史的麵條，長50公分，寬0.3公分，由粟製成，根據最早的史料及實物佐證，因此通常認為麵起源於中國新石器時代。
            </p>
        </div>
    </main>

    <!-- 區塊內容介紹 -->
    <section>
        <div class="boxing">
            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/noodle2.jpg" alt="牛肉麵">
                </div>
                <div class="text_box">
                    <h4>牛肉麵</h4>
                    <p>牛肉麵是泛指各種以燉煮過的牛肉為主要配料的湯麵食，其根源難以追溯，但與近代牛肉麵調理方式較為接近的麵食，清燉類的牛肉麵部分認為起源於蘭州牛肉麵，原本是陳維精所創。據學者說法，紅燒風味牛肉麵可能起源於台灣高雄市岡山區空軍眷村，以四川成都菜「小碗紅湯牛肉」改良而成。
                        現今牛肉麵已是華人的普遍食物，各地方的牛肉麵都有其特色。現在有不少泡麵都是以添加牛肉或牛肉口味而成牛肉麵，尤其是在台灣非常的普遍。</p>
                </div>
            </div>

            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/noodle3.jpg" alt="拉麵">
                </div>
                <div class="text_box">
                    <h4>拉麵</h4>
                    <p>拉麵做法是將揉好的麵團拉長，摺疊，再拉長，反覆若干次，直到麵條足夠細為止。優秀的師傅能將麵條拉得又細又長，口感勁道十足。因為拉麵流行於中國西北，由於當地人飲食習慣，拉麵多為清真食品。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>