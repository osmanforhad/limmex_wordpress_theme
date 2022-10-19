<?php

/**
 * Template Name: Full Width Page
 */
get_header();
?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page">
          <h4><?php the_title(); ?></h4>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();  ?>