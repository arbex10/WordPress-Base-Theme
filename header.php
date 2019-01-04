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
    