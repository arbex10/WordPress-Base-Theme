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
  
  <!-- Starting here, you can change everything you want -->  
  <header class="header">
    <div class="container">
      <div class="row header-content">
        <div class="col-sm-12 nopadding">
          <h1 class="site-title"><a href="<?=home_url()?>"><?php bloginfo('name'); ?></a></h1>
          <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </div>
      </div>
      <nav class="row navbar">
        <div class="nav-menu" role="navigation">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'nav menu',
                'fallback_cb' => fallbackCreate()
              )
            ); 
          ?>
        </div>
        <div class="header-search">
          <?php get_search_form(); ?>
        </div>
      </nav>
    </div>
  </header>