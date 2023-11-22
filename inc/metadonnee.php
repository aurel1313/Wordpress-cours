<?php

    // ajoute metabox//
    add_action('add_meta_boxes',function(){
        add_meta_box('dietetique_favourite_post','Article en favoris',function(){ 
            $value=get_post_meta(get_the_ID(),"dietetique_favoris",true);
            ?>

           <input type='checkbox' value='1' name="dietetique_favoris" id="dietetique_favoris"
           <?= checked($value,'1'); ?>
           >
           <label for="dietetique_favoris">Mettre en favoris </label>
        <?php });
    },'post','side');
    //sauvegarder l metaadonnee en bdd//
    add_action('save_post',function($post_id){
        if(current_user_can("edit_post",$post_id)){
            if(array_key_exists('dietetique_favoris',$_POST)){
                update_post_meta($post_id, 'dietetique_favoris',1);
            }else{
                delete_post_meta($post_id, 'dietetique_favoris');
            }
        }
       
       
        
    });
?>