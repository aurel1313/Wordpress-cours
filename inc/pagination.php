<?php

    function dietetique_pagination(){ ?>
        <nav aria-label="Page navigation example" class="d-flex flex-row justify-content-center">
            <ul class='pagination'>
        <?php
        
          $pages = paginate_links(['type'=>'array']);
            foreach ($pages as $page){
                echo '<li class="page-item">';
                    echo str_replace("page-numbers","page-link",$page);
                echo '</li>';
            }


           
            ?>
        </ul>
 
        </nav>
    <?php }

?>