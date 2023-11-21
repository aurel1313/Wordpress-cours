<?php get_header(); ?>
    <?php the_post() ?>
    <div class ="container">
        <div class='card'>
          <img src = <?php the_post_thumbnail_url() ?> class="card img-top style="height:280px; object-fit:cover;" />
            <div class='card-body'>
                <h1><?php the_title() ?></h1>
                <p>Auteur: <?php the_author() ?></p>
                <div class ='card-body'>
                    <p><?php the_content() ?></p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>




