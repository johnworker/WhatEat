<?php
/** 
 * Template Name: snack
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
        <h2 class="title-word">點心</h2>
        <img src="<?php bloginfo('template_directory') ?>/img/snack1.jpg" alt="點心">
        <div class="writings">
            <h3>點心</h3>
            <p>在正餐以外的食物，包括但不限於零食。<br>
                中式糕點又稱唐餅（與西餅相對），指的是用中國傳統工藝加工製作的糕點。<br>
                烤雞又稱燒雞，意指將全雞或雞件使用如烤箱、營火、等高溫烹調設備使雞肉大部分不在接觸上將其煮熟為主。</p>
        </div>
    </main>

    <!-- 區塊內容介紹 -->
    <section>
        <div class="boxing">
            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/snack2.jpg" alt="饅頭">
                </div>
                <div class="text_box">
                    <h4>饅頭</h4>
                    <p>饅頭中國傳統麵食，以麵粉和水按比例混合發酵後（或拌入內餡）蒸製而成的食品。華北地區稱為餑餑，關中、中原等地稱為饃、晉語、部分閩語地區也稱為饃饃等。通常是半球形、長方體，大小從直徑4公分左右到直徑15公分左右均有。其中，無餡的饅頭是中國北方人的主食。
                    </p>
                </div>
            </div>

            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/snack3.jpg" alt="蔥油餅">
                </div>
                <div class="text_box">
                    <h4>蔥油餅</h4>
                    <p>蔥油餅是一種由蔥花作成的煎餅，在華人社會街頭如臺灣、香港、中國大陸，以及馬來西亞、新加坡等國家常見，常作為早餐或小吃食用。</p>
                </div>
            </div>

            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/snack4.jpg" alt="烤雞">
                </div>
                <div class="text_box">
                    <h4>烤雞</h4>
                    <p>烤雞又稱燒雞，意指將全雞或雞件使用如烤箱、營火、等高溫烹調設備使雞肉大部分不在接觸上將其煮熟為主。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>