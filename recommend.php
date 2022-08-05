<?php
/** 
 * Template Name: recommend
 * 
 * 
*/
?>

<?php get_header(); ?>


  <!-- 導覽列 -->
  <nav data-aos="fade" data-aos-delay="500" data-aos-duration="3000">
  <div></div>
        <div id="menu">
            <?php wp_nav_menu( array( 'theme_location' =>'primary-menu' ) ); ?>
        </div>
    <div id="social">
      <a href="https://www.youtube.com/results?search_query=eat+what" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/youtube.png"
          alt="youtube"></a>
      <a href="https://www.instagram.com/besscomha" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/instagram.png" alt="instagram"></a>
      <a href="http://m.facebook.com/yanjun.liao.50?ref=bookmarks" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/facebook.png" alt="facebook"></a>
      <a href="https://github.com/" target="blank"><img src="<?php bloginfo('template_directory') ?>/img/github.png" alt="github"></a>
    </div>
  </nav>

  <section>
    <h2 class="title-new-word">美食推薦</h2>

    <!-- 輪播 -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php bloginfo('template_directory') ?>/img/meal1.jpg" class="d-block w-100" alt="美食推薦">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory') ?>/img/meal2.jpg" class="d-block w-100" alt="美食推薦">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory') ?>/img/meal3.jpg" class="d-block w-100" alt="美食推薦">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory') ?>/img/meal4.jpg" class="d-block w-100" alt="美食推薦">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory') ?>/img/meal5.jpg" class="d-block w-100" alt="美食推薦">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory') ?>/img/meal6.jpg" class="d-block w-100" alt="美食推薦">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

   <!-- 卡片推薦美食區 -->
   <h3 class="title-big">美食區</h3>
  <section id="delicious">
    <div class="card mb-5 border-dark" style="max-width: 1280px;">
      <div class="row no-gutters">
        <div class="col-md-4 pt-md-5 pl-md-2">
          <img class="food" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" src="<?php bloginfo('template_directory') ?>/img/food1.jpg" alt="美食">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">經典牛排</h5>
            <p class="card-text">別於其他大部份熟食，牛排通常不會煮至全熟，而是可以以個人喜好調較生熟程度。生熟程度以數字（通常是奇整數）區分，主要分為：<br>
              全生（Raw）：完全未經烹煮的生牛肉，這種做法只會用在某些菜式例如韃靼牛肉、基特富（Kitfo，衣索比亞菜餚）或生牛肉沙拉。<br>
              一分熟（Rare）：僅表面煎熟，呈灰褐色，剖面為血紅色，中心呈寶石紅，核心溫度約48.9℃（120℉）。<br>
              三分熟（Medium-Rare）：外圍呈灰褐色，剖面為絕大部份為血紅色，沒有一分熟的中心寶石紅，核心溫度約52.2℃（126℉）。<br>
              五分熟（Medium）：外圍呈灰褐色，剖面為粉紅色，核心仍有血紅色，溫度約57.2℃（135℉）。<br>
              七分熟（Medium-Well）：大部分呈灰褐色，核心為粉紅色，溫度約62.8℃（145℉）。<br>
              全熟（Well-Done）：表面稍微烤焦，剖面全熟無不見紅，通常西餐廳裡的牛排都會避免全熟，因為肉質硬韌難咬，為口感最差的熟度。由於對這道菜的特殊要求（全熟並且肉有一些水分）很多廚師都無法把這道菜做到完美。</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card mb-5 border-dark" style="max-width: 1280px;">
      <div class="row no-gutters">
        <div class="col-md-4 pt-md-5 pl-md-2">
          <img class="food" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" src="<?php bloginfo('template_directory') ?>/img/food2.jpg" alt="美食">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">麥當勞套餐</h5>
            <p class="card-text">
              麥當勞於2009年大力推廣其24小時外賣速遞服務，香港名為「麥麥送」（取粵語「密密送」諧音），台灣名為「歡樂送」，中國大陸名為「麥樂送」，並起用當地著名藝人為代言人。<br>
           
              至今香港已經有103間麥當勞分店實行24小時通宵營業，在長期的高租金下，成為麥難民棲息之所。 然而，2019年開始，因營運原因，不少麥當勞分店已取消24小時服務。<br>
              
              而澳門方面，黑沙環龍園分店的麥當勞於2007年開始設有24小時麥當勞，現時澳門有7間麥當勞實行24小時通宵營業。<br>
              
              在中國內地已經有過半數的麥當勞分店陸續實行24小時營業。<br>
              
              在臺灣已經有超過200間麥當勞分店實行24小時營業。<br>
  
            麥當勞在美國及全球各地主要販售漢堡包，以及薯條、炸雞、碳酸飲料、冰品、沙拉、水果、美式热咖啡等快餐食品。<br>
            為了迎合在世界各地民眾的口味，麥當勞也衍生許多不同特色的產品，如：蝦漢堡、椰漿飯漢堡（nasi lemak burger）等。<br>
            在泰國有提供飯食 ，為迎合菲律賓人愛吃米飯與甜食的習慣，麥當勞部分套餐有白飯。<br>
            冰品中，冰淇淋有紫芋（Ube McDip）口味、草莓口味、熱焦糖聖代。冷飲有鳳梨汁。<br>
            其中常見經典的麥當勞套餐搭配是薯條配漢堡的組合。
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-5 border-dark" style="max-width: 1280px;">
      <div class="row no-gutters">
        <div class="col-lg-0 col-md-4 pt-md-5 pl-md-2">
          <img class="food" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" src="<?php bloginfo('template_directory') ?>/img/food3.jpg" alt="美食">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">精簡套餐</h5>
            <p class="card-text">日本料理中較有特色的代表包括握壽司、味噌湯、刺身、清酒、便當、納豆、天婦羅、章魚燒、竹輪、蕎麥麵、牛丼、拉麵、烏龍麵，以及擺設得非常精緻的懷石料理等。<br>
              傳統的日本料理以米飯為主食，然後配上魚、肉、蔬菜或醬菜等其他菜餚和湯。此外也有改良自東南亞、歐洲等地的食物但同樣頗受歡迎的例子，如日式咖喱飯、日式豬排飯和土耳其飯。<br>

              日本料理中較傳統的料理使用了菜餚的數目來命名，例如日本餐膳當中最簡單的是一汁一菜（單菜餐），內容是一碟醬菜（通常是醃黃蘿蔔），一碗飯以及一碗湯，傳統的日本早餐就是「一汁一菜」的代表，通常包括了味噌湯，米飯和一碟醬菜。懷石料理的頭盤有時候也會被稱呼作「一汁一菜」。<br>
              而最常見的料理叫作一汁三菜（三菜餐），包括了湯，米飯和三碟用不同方法煮出來的菜。這三碟菜通常是一碟生魚片，一碟烤菜，和一碟水煮菜，有的則是蒸菜，炸菜，醋菜，或是淋上醬料的菜，另外附上綠茶和梅乾等醬菜。</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

  </section>

    <!-- 頁尾 -->
    <?php get_footer(); ?>