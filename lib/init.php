<?php

// Add editor style
add_editor_style();

// Add thumbnail support
add_theme_support( 'post-thumbnails' );

// Add Bootstrap, jQuery and Custom CSS e JS
function inserir_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() . '?<?=time()?>' );

  wp_enqueue_script( 'jquery-3.3.1.min.js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js');
  wp_enqueue_script( 'booostrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
  wp_enqueue_script( 'javascript', get_template_directory_uri() . '/assets/js/javascript.js' );
}
add_action('wp_enqueue_scripts', 'inserir_scripts');

// Register Menu Area
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'top-menu' => __( 'Top Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Register Widget Area
function wbt_widgets_init() {
  register_sidebar(
    array(
      'name' => __( 'Main Sidebar', 'wbt' ),
      'id' => 'main-sidebar',
      'description' => __( 'Site Main Sidebar', 'wbt' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widgettitle widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action( 'widgets_init', 'wbt_widgets_init' );

// Add support for infinite scroll
add_theme_support(
  'infinite-scroll',
  array(
    'type'           => 'scroll',
    'footer_widgets' => false,
    'container'      => 'content',
    'wrapper'        => false,
    'render'         => false,
    'posts_per_page' => get_option( 'posts_per_page' )
  )
);

?>