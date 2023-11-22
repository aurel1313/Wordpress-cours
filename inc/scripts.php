<?php


add_action("wp_enqueue_scripts", function(){
    wp_register_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" );
	wp_enqueue_style( 'bootstrap' );

    wp_register_script( 'script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js",[],false,true );
    wp_enqueue_script('script');
    //custom css//
    wp_register_style('all_pages_css',get_template_directory_uri() .'/css/all-pages.css');
    wp_enqueue_style('all_pages_css');
});



?>