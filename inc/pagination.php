<?php

    function dietetique_pagination(){ ?>
        <nav aria-label="Page navigation example" class="d-flex flex-row justify-content-center my-4">
            <ul class='pagination'>
        <?php
        
          $pages = paginate_links(['type'=>'array']);
          if($pages===null){
            return;
          }
            foreach ($pages as $page){
                $class ='page-item';
                $active = str_contains( $page,'current' );
                if($active){
                    $class .=' active';
                }
                echo '<li class='.$class.'>';
                    echo str_replace("page-numbers","page-link",$page);
                echo '</li>';
            }


           
            ?>
        </ul>
 
        </nav>
    <?php }

?>