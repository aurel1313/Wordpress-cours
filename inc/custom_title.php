<?php

    // add tiret//
add_filter('document_title_parts', function($title_parts_array){

    $title_parts_array['tagline'] ="un test";
    return $title_parts_array;
});
// add slashes//
add_filter('document_title_separator', function(){

   return '|';
});
?>