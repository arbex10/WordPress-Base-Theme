<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php 
      if (is_home() or is_front_page()) {
        if (empty(get_bloginfo('description'))) {
          echo get_bloginfo('name');
        } else {
          echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
        }
      } elseif (is_single()) {
        echo get_bloginfo('name') . ' | ' . single_post_title();
      } else {
        echo get_bloginfo('name');
      }
      ?>
    </title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<<<<<<< HEAD
    
  <header id="header">
    <div class="container">
      <div class="row">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
    </div>
  </header>
=======
    
>>>>>>> 1564f44b51cb8fc116fbe2af4a489350929bca20
