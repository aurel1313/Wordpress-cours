<?php
    /**
     * Template Name: Two col with hour
     * Template Post Type: post,page
     */

?>
<?php  get_header(); ?>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php the_content(); ?>
      </div>
      <div class="col-md-6 text-right">
        <h1>Heure</h1>
        <p id="heure"><?= date("H:i:s" ); ?></p>
      </div>
    </div>
  </div>
</body>
</html>
</body>
<?php get_footer(); ?>