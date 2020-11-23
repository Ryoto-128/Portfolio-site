<?php

/* 画像パスを出力するショートコード */
add_shortcode('img', 'img_func');
  function img_func() {
  return get_template_directory_uri().'/img/';
}

/*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );

function get_thumb_img($size = 'full', $alt = null, $p_id = null) {

  $p_id = ($p_id) ? $p_id : get_the_ID();    //追記部分
  $thumb_id = get_post_thumbnail_id($p_id);
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);
  $thumb_src = $thumb_img[0];
  $alt = ($alt) ? $alt : get_the_title($p_id);

  return '<img src="'.$thumb_src.'" alt="'.$alt.'">';
}

add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    $myclass = 'img'; // クラス名
    return preg_replace('/class=".*\w+"/', 'class="'. $myclass .'"', $html);
}
?>