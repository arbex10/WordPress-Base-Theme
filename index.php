<?php 
/**
 * The main template file
 *
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<div id="primary" class="container">
  <main id="front-page" class="row">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile; ?>

  </main>
</div>

<?php
/* Uncomment this if you want to use a sidebar here
 * get_sidebar();
 */
?>

<?php get_footer(); ?>