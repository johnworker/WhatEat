<?php
/** 
 * Template Name: game
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

    <section class="games">

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h2>骰子</h2>
            <h4 data-aos="zoom-in">請點擊骰子使它滾動</h4>
            <div class="dice">
                <section class="container">
                    <div id="cube">
                      <div class="front">
                        <span class="dot dot1"></span>
                      </div>
                      <div class="back">
                        <span class="dot dot1"></span>
                        <span class="dot dot2"></span>
                      </div>
                      <div class="right">
                        <span class="dot dot1"></span>
                        <span class="dot dot2"></span>  
                        <span class="dot dot3"></span>
                      </div>
                      <div class="left">
                        <span class="dot dot1"></span>
                        <span class="dot dot2"></span>  
                        <span class="dot dot3"></span>
                        <span class="dot dot4"></span>
                      </div>
                      <div class="top">
                        <span class="dot dot1"></span>
                        <span class="dot dot2"></span>  
                        <span class="dot dot3"></span>
                        <span class="dot dot4"></span>
                        <span class="dot dot5"></span>
                      </div>
                      <div class="bottom">
                        <span class="dot dot1"></span>
                        <span class="dot dot2"></span>  
                        <span class="dot dot3"></span>
                        <span class="dot dot4"></span>
                        <span class="dot dot5"></span>
                        <span class="dot dot6"></span>
                      </div>
                    </div>
                  </section>
            </div>
          </div>
          <div class="carousel-item">
            <h2>翻牌</h2>
                <!-- flip-card-container -->
                <div id="good_box">

                    <!-- <h4>Horizontal Flip</h4> -->
                    <div class="flip">
                        <div class="front" style="background-image: url(<?php bloginfo('template_directory') ?>/img/one_card.png)">
                        </div>
                        <div class="back"  style="background-image: url(<?php bloginfo('template_directory') ?>/img/food_draw.png);">
                            <h3>蛋包飯</h3>
                        </div>
                    </div>
                    <div class="flip">
                        <div class="front" style="background-image: url(<?php bloginfo('template_directory') ?>/img/one_card.png)">
                        </div>
                        <div class="back" style="background-image: url(<?php bloginfo('template_directory') ?>/img/food_draw2.png);">
                            <h3>炒麵</h3>
                        </div>
                    </div>
                    <div class="flip">
                        <div class="front" style="background-image: url(<?php bloginfo('template_directory') ?>/img/one_card.png)">
                        </div>
                        <div class="back" style="background-image: url(<?php bloginfo('template_directory') ?>/img/food_draw3.png);">
                            <h3>牛排</h3>
                        </div>
                    </div>

                </div>
          </div>
          <div class="carousel-item">
            <h2>抽牌</h2>
                <div class="draw_box">
                    <img class="deck" src="<?php bloginfo('template_directory') ?>/img/deck.png" alt="排堆">
                    <img class="draw" src="<?php bloginfo('template_directory') ?>/img/food_draw.png" alt="抽牌">
                </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>