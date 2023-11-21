<?php


// enregistrer emplacement menu//
register_nav_menu('header','Entete du menu');
add_filter('nav_menu_css_class',function($classes){
    $classes[] = 'nav-item';
    return $classes;
});
add_filter('nav_menu_link_attributes',function($attrs){
    $attrs['class']='nav-link';
    return $attrs;
});

?>