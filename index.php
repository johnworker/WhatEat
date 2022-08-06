<?php
/** 
 * Template Name: index
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
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png"
                    alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/github.png" alt="github"></a>
        </div>
    </nav>

    <!-- 輪播 -->
    <div id="banner">
        <!-- (.banner$>h1{標題一}+h2{標題二})*3 -->
        <div class="banner1">
            <h2 data-aos="fade-up" data-aos-duration="1000">尋找美食</h2>
            <h3 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"> 
                吃飯是每天的重要時刻，當吃飯變煩惱會成為負擔，讓我們協助您尋找美食。<br>
                為了減少決策所需的時間，特別製作一款「好想吃」應用程式，
                替你找出你想吃的食物並且在這過程享受小遊戲的樂趣。</h3>
        </div>
        <div class="banner2">
            <h2 data-aos="fade-up" data-aos-duration="1000">互動篩選</h2>
            <h3 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                透過遊戲互動的方式，用小遊戲的方式讓電腦幫您選做出選擇<br>
                會不定時更新各種遊戲，使決策的過程中更添加趣味性。
                </h3>
        </div>
        <div class="banner3">
            <h2 data-aos="fade-up" data-aos-duration="1000">美食取得途徑</h2>
            <h3 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                做出選擇後，有各種美食取得途徑，可以選擇取得食譜或者訂購外送還可以去餐廳吃<br>
                如果有充分的時間，可以自己下廚料理，懶得自己動手做，也可以叫外賣，還可以幫您規劃路線，在約朋友去餐廳吃。</h3>
        </div>
    </div>
    <!-- section#about>.big_box>h2+p-->
    <section id="about" data-aos="fade" data-aos-duration="3000">
        <div class="big_box">
                <!-- 關於APP -->
            <h2 class="title-big">簡介</h2>

            <h2 class="title-two">設計概念</h2>
            <p>進食是不僅是生活中一個重要的部分，也是人重要的社交行為，人的食材準備與食物消費，在人群社會中扮演著重要的角色。<br>
                俗話說「民以食為天」便是這個道理的最佳概括。<br>
                我們透過遊戲互動方式的APP或網頁小遊戲，讓使用者尋找美食的過程輕鬆愉快，同時也體驗到遊戲樂趣，尋找美食又可以有遊戲體驗，使得找美食不無聊、不孤單。</p>

            <div class="mini_box">
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction0.png" alt="手機螢幕"> 
                    <h3>主畫面</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction1.png" alt="手機螢幕">
                    <h3>登入畫面</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction2.png" alt="手機螢幕">
                    <h3>去過地點</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction3.png" alt="手機螢幕">
                    <h3>問答模式</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction4.png" alt="手機螢幕">
                    <h3>角色互動</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction5.png" alt="手機螢幕">
                    <h3>按鈕提示</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction7.png" alt="手機螢幕">
                    <h3>骰子</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction8.png" alt="手機螢幕">
                    <h3>翻牌</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction9.png" alt="手機螢幕">
                    <h3>輪盤</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction10.png" alt="手機螢幕">
                    <h3>抽牌</h3>
                </div>
                <div class="mini-card">
                    <img src="<?php bloginfo('template_directory') ?>/img/Introduction11.png" alt="手機螢幕">
                    <h3>選擇價格</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- 最新消息 -->
    <section id="news">
        <h2 class="title-big">最新消息</h2>
        <div id="news-content">
            <!-- (.news-card>img+h3{標題三}+p{lorem10}+button{按鈕})*3 -->
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="1000">
                <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/method_change1.png" alt="食譜最新消息">
                <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/method1.png" alt="食譜最新消息">
                <h4>食譜</h4>
                <p>進行互動遊戲後，選出當下想吃的食物，提供您食譜方便製作。</p>
                <button class="btn">
                    <a href="https://icook.tw/recipes/popular" target="blank">找食譜</a>
                </button>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="800" data-aos-duration="1000">
                <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/method_change2.png" alt="外送最新消息">
                <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/method2.png" alt="外送最新消息">
                <h4>外送</h4>
                <p>適合忙碌或想好好休息的使用者使用，選出愛吃的食物後，系統幫您連接外送平台。</p>
                <button class="btn">
                    <a href="https://www.ubereats.com/tw" target="blank">找外送</a>
                </button>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="1000" data-aos-duration="1000">
                <img class="recipe1" src="<?php bloginfo('template_directory') ?>/img/method_change3.png" alt="餐廳最新消息">
                <img class="recipe2" src="<?php bloginfo('template_directory') ?>/img/method3.png" alt="餐廳最新消息">
                <h4>餐廳</h4>
                <p>想出外用餐或多人聚會又不知道如何選餐廳，別擔心系統將統整您的菜單，提供餐廳路線資訊給您。</p>
                <button class="btn">
                    <a href="https://www.setn.com/News.aspx?NewsID=916510" target="blank">找餐廳</a>
                </button>
            </div>

        </div>
    </section>

    <!-- 最新遊戲 -->
    <!-- #work>(.work-card>img+h2{標題二})*6 -->
    <h2 class="title-big">最新遊戲</h2>
    <div id="work">
        <div class="work-card">
            <img src="<?php bloginfo('template_directory') ?>/img/function_dice.png" alt="遊戲方式">
            <h3>骰子</h3>
        </div>
        <div class="work-card">
            <img src="<?php bloginfo('template_directory') ?>/img/function_pump.png" alt="遊戲方式">
            <h3>抽牌</h3>
        </div>
        <div class="work-card">
            <img src="<?php bloginfo('template_directory') ?>/img/function_around.png" alt="遊戲方式">
            <h3>輪盤</h3>
        </div>
        <div class="work-card">
            <img src="<?php bloginfo('template_directory') ?>/img/function_turn.png" alt="遊戲方式">
            <h3>翻牌</h3>
        </div>
        <div class="work-card">
            <img src="<?php bloginfo('template_directory') ?>/img/function_image.png" alt="遊戲方式">
            <h3>互動</h3>
        </div>
    </div>
    <?php get_footer(); ?>
