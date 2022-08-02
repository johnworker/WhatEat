<?php
    register_nav_menus(
        array('primary-menu' => __('{美食簡介}'), 'story-menu' => __('{美食推薦}'), 'research-menu' => __('{遊戲模式}'), 'analysis-menu' => __('{聯絡方式}') )
    );
    
?>

<?php
if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => '側邊攔',
        'id' => 'sidebar',
        'description' => '{區塊描述}',
        'before_widget' => '<section id="%1$s" class="sidebar-right">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
?>


<?php
function filter_dsq_can_load( $script_name ) {
    // $script_name is either 'count' or 'embed'.
	if ( 'count' === $script_name ) {
		return false;
	}

	return true;
}
add_filter( 'dsq_can_load', 'filter_dsq_can_load' );
?>