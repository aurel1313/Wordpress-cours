<?php

add_action( 'wp_enqueue_scripts', function (){
    wp_register_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" );
	wp_enqueue_style( 'bootstrap' );
  
});
add_action("wp_enqueue_scripts", function(){
    wp_register_script( 'script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js",[],false,true );
    wp_enqueue_script('script');
});

?>