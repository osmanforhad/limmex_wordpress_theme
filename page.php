<?php

/**
 * Temaplate Name: Page Template
 */
get_header(); ?>

<section class="page_area">
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


<?php get_footer(); ?>