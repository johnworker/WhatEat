<?php
/** 
 * Template Name: Product
 * 
 * 
*/
?>

<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>吃什麼網站</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- slick CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" href="./style.css">

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

<body>
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
            <a href="https://www.youtube.com/results?search_query=eat+what" target="blank"><img src="./img/youtube.png"
                    alt="youtube"></a>
            <a href="https://www.instagram.com/besscomha" target="blank"><img src="./img/instagram.png" alt="instagram"></a>
            <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="./img/facebook.png"
                    alt="facebook"></a>
            <a href="https://github.com/" target="blank"><img src="./img/github.png" alt="github"></a>
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
    <!-- 關於APP -->
    <h2 class="title-big">簡介</h2>
    <!-- section#about>.big_box>h2+p-->
    <section id="about" data-aos="fade" data-aos-duration="3000">
        <div class="big_box">
            <h2>設計概念</h2>
            <p>進食是不僅是生活中一個重要的部分，也是人重要的社交行為，人的食材準備與食物消費，在人群社會中扮演著重要的角色。<br>
                俗話說「民以食為天」便是這個道理的最佳概括。<br>
                我們透過遊戲互動方式的APP或網頁小遊戲，讓使用者尋找美食的過程輕鬆愉快，同時也體驗到遊戲樂趣，尋找美食又可以有遊戲體驗，使得找美食不無聊、不孤單。</p>

            <div class="mini_box">
                <div class="mini-card">
                    <img src="./img/Introduction0.png" alt="手機螢幕">
                    <h3>主畫面</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction1.png" alt="手機螢幕">
                    <h3>登入畫面</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction2.png" alt="手機螢幕">
                    <h3>去過地點</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction3.png" alt="手機螢幕">
                    <h3>問答模式</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction4.png" alt="手機螢幕">
                    <h3>角色互動</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction5.png" alt="手機螢幕">
                    <h3>按鈕提示</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction7.png" alt="手機螢幕">
                    <h3>骰子</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction8.png" alt="手機螢幕">
                    <h3>翻牌</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction9.png" alt="手機螢幕">
                    <h3>輪盤</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction10.png" alt="手機螢幕">
                    <h3>抽牌</h3>
                </div>
                <div class="mini-card">
                    <img src="img/Introduction11.png" alt="手機螢幕">
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
                <img class="recipe1" src="./img/method_change1.png" alt="食譜最新消息">
                <img class="recipe2" src="./img/method1.png" alt="食譜最新消息">
                <h4>食譜</h4>
                <p>進行互動遊戲後，選出當下想吃的食物，提供您食譜方便製作。</p>
                <button class="btn">
                    <a href="https://icook.tw/recipes/popular" target="blank">找食譜</a>
                </button>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="800" data-aos-duration="1000">
                <img class="recipe1" src="./img/method_change2.png" alt="外送最新消息">
                <img class="recipe2" src="./img/method2.png" alt="外送最新消息">
                <h4>外送</h4>
                <p>適合忙碌或想好好休息的使用者使用，選出愛吃的食物後，系統幫您連接外送平台。</p>
                <button class="btn">
                    <a href="https://www.ubereats.com/tw" target="blank">找外送</a>
                </button>
            </div>
            <div class="news-card" data-aos="zoom-in-up" data-aos-delay="1000" data-aos-duration="1000">
                <img class="recipe1" src="./img/method_change3.png" alt="餐廳最新消息">
                <img class="recipe2" src="./img/method3.png" alt="餐廳最新消息">
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
            <img src="./img/function_dice.png" alt="遊戲方式">
            <h3>骰子</h3>
        </div>
        <div class="work-card">
            <img src="./img/function_pump.png" alt="遊戲方式">
            <h3>抽牌</h3>
        </div>
        <div class="work-card">
            <img src="./img/function_around.png" alt="遊戲方式">
            <h3>輪盤</h3>
        </div>
        <div class="work-card">
            <img src="./img/function_turn.png" alt="遊戲方式">
            <h3>翻牌</h3>
        </div>
        <div class="work-card">
            <img src="./img/function_image.png" alt="遊戲方式">
            <h3>互動</h3>
        </div>
    </div>


    <!-- 頁尾 -->
    <footer>
        <div>
            <a href="" class="logo">{LEO}</a>
        </div>
        <small id="copy">
            &copy; LEO 2021.
        </small>
        <div id="link">
            <a href="./rice.php">美食簡介</a>
            <a href="./recommend.php">美食推薦</a>
            <a href="./game.php">遊戲模式</a>
            <a href="./contact.php">聯絡方式</a>
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
    <script src="./main.js"></script>
</body>

</html>
