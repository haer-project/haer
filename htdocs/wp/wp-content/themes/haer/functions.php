<?php
add_theme_support( 'post-thumbnails' );

// フィルタの登録
add_filter('content_save_pre','test_save_pre');
 
function test_save_pre($content){
    global $allowedposttags;
 
    // iframeとiframeで使える属性を指定する
    $allowedposttags['iframe'] = array('class' => array () , 'src'=>array() , 'width'=>array(),
    'height'=>array() , 'frameborder' => array() , 'scrolling'=>array(),'marginheight'=>array(),
    'marginwidth'=>array());
 
    return $content;
}
?>
