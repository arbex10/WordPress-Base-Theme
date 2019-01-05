<?php

// Function to display meta
function wbt_meta() {
  echo '<h6>' . get_the_author() . '   |   ' . get_the_date('d/m/Y') . ' - ' . get_the_time() . '</h6>';
}

// Function to limit excerpt lenght
function get_excerpt($limit){
  $excerpt = get_the_content();
  $excerpt = preg_replace(" ([.*?])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $limit);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  return $excerpt;
}

// Function to add link to create menu, if menu doesn't exists
function fallbackCreate() {
  echo "<a href='" . home_url() . "/wp-admin/nav-menus.php' class='fallback-create'>" . __('Create menu', 'wtb') . "</a>";
}

?>