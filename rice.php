<?php
/** 
 * Template Name: rice
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
        <h2 class="title-word">飯</h2>
        <img src="<?php bloginfo('template_directory') ?>/img/rice1.jpg" alt="飯">
        <div class="writings">
            <h3>白飯</h2>
                <p>米飯是一種用稻米與水煮成的食物。米飯是亞洲國家最主要的糧食。米飯製法為一杯米加一杯到一杯半的水，煮出來的米適當的膨脹，裡面全熟即成。<br>

                    米飯的面世，可追溯至粥。由於烹煮粥水控制水量的要求比米飯低，上古的華夏民眾後來慢慢掌握不同水量時的烹煮效果，就發展出較飽滿的米飯。現代由於打磨穀粒的技術比古代越趨先進，因此民眾食用的米飯也漸漸由粗硬難吃的糙米改為口感軟糯的白米，但已失去存於糙米表面即穀糠的各種營養，雖然幾乎只剩下澱粉質等糖分，不過身為主食以增加飽足感為第一優先，其餘養份可由配菜解決。
                </p>
        </div>
    </main>

    <!-- 區塊內容介紹 -->
    <section>
        <div class="boxing">
            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/rice2.jpg" alt="滷肉飯">
                </div>
                <div class="text_box">
                    <h4>滷肉飯</h4>
                    <p>滷肉飯在臺灣被視為極具台灣特色的民眾小吃，在全臺各地都有店家販售，南北有不同的意義。在北臺灣，滷肉飯為一種淋上含有煮熟碎豬肉或炒香肉燥（豬絞肉）及醬油滷汁的白飯菜餚，有時醬汁裡亦會有香菇丁等的成份在內，與炕肉飯不同，看起來像南臺灣肉燥飯；「滷肉飯」在臺灣南部是指有著滷汁塊狀肉的切丁滷肉飯，使用滷肉塊或者肉燥的都可以稱為「滷肉飯」。<br>
                    </p>
                </div>
            </div>
            <div class="box_magic">
                <div class="image_box">
                    <img src="<?php bloginfo('template_directory') ?>/img/rice3.jpg" alt="炒飯">
                </div>
                <div class="text_box">
                    <h4>炒飯</h4>
                    <p>炒飯是在炒鍋或煎鍋中炒熟的米飯，通常與雞蛋、蔬菜、海鮮或肉類等其他食材混合。<br>
                        常見的蛋炒飯是一種梅納反應，蛋液與米飯表面在加熱時產生焦糖化反應，米粒表面會變得較硬且易粒粒分離，才能炒出粒粒分明的炒飯，不需要使用冰箱冷藏煮熟的飯。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>