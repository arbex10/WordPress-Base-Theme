<?php

// Function to display meta
function wbt_meta() {
  echo '<h6>' get_the_author() . '   |   ' . get_the_date('d/m/Y') . ' - ' . get_the_time() . '</h6>';
}

?>