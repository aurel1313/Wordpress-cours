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


       
  <div class ="container mt-5">
<?php if(have_posts()): ?>
    <div class='row'>
    <?php while(have_posts()){
       the_post( ); ?>
    <div class ='col-4'>
        <div class='card' >
        <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );?>
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