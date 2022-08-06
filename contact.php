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
    <div></div>
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

    <h2 id="list" class="title-big" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500">聯絡我</h2>
    <!-- 表單元素 action="" 傳遞給後端頁面，通常是 XXX.php -->
    <!-- 要設定 input type="submit" 表單資料才會傳到後端-->
    <!-- 方法：傳送資料的方式 -->
    <!-- GET 曝光表單資料 -->
    <!-- POST 不會曝光表單資料 -->
    <form action="javascript:Goform();">
        <input type="text" name="name" placeholder="請輸入您的姓名" required>
        <input type="email" name="email" placeholder="請輸入您的信箱" required>
        <textarea placeholder="輸入你想對LEO說的話" type="text" name="msg"></textarea>
        <input type="submit" value="送出" class="btn">
    </form>

    <script>
        function Goform() {
        var field1 = $("[name = 'name']").val();
        var field2 = $("[name = 'email']").val();
        var field3 = $("[name = 'msg']").val();

        $.ajax({
            url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeJx58gTD0af0lnkQR73ko9iT3o6ZDFK6b0PWfwWwgapb1WSg/formResponse",
            data: {
                "entry.908405989": field1,
                "entry.1562783350": field2,
                "entry.988036646": field3,
            },
            type: "POST",
            dataType: "xml",
            statusCode: {
                0: function () {
                    alart("完成");
                },
                200: function () {
                    alart("完成");
                }
            }
        });
    }   
    </script>

    <!-- 頁尾 -->
    <?php get_footer(); ?>