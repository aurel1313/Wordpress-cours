<?php get_header(); ?>

Ici votre contenu
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<h1 class="text-center mt-5">Des supers articles</h1>


       
  <div class =" mt-5">
<?php if(have_posts()): ?>
    <div class='row'>
    <?php while(have_posts()){
       the_post( ); ?>
    <div class ='col-4'>
        <div class='card' >
          <div class='float-right text-right '>
          <?php if(get_post_meta(get_the_ID(), 'dietetique_favoris')){ ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill icone_post_favori" viewBox="0 0 16 16">
               <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
          </div>
         <?php } ?>
        <img src="<?php the_post_thumbnail_url('card-header'); ?>" class="card-img-top" style="height: 230px">
       <div class='card-body'>
        
       <?php the_title(); ?> - Auteur:<?php the_author(); ?>
        <a href = <?php the_permalink() ?> class='btn btn-primary'>Voir article</a>
    
        <p><?php the_excerpt() ?></p>
        
   
        </div>
    </div>
    </div>
 
       <?php } ?>
    <?php dietetique_pagination(); ?>
       
    <?php else: ?>
    <p>Il n'y a aucun article.</p>
    <?php endif; ?>
    </div>

</div>

</div>
    </div>
<?php get_footer(); ?>