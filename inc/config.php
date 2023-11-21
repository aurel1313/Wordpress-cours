<?php

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    // config formats imgs utilisées//
    add_image_size('card-header', 350, 215, true);
  });
  add_theme_support( 'post-thumbnails' );  
  add_theme_support('menus');


?>