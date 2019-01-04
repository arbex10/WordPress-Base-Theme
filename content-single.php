<?php
/**
 * The template used in your single posts
 *
 * Feel free to edit this file like you prefer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <div class="entry-meta">
      <?php wbt_meta(); ?>
    </div>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>