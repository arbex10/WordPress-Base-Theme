<?php 
/**
 * The template for display in all pages
 */

get_header(); ?>

<div id="primary" class="container">
  <main id="front-page" class="row">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('content', 'page'); ?>

    <?php endwhile; ?>

  </main>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>