<?php

function custom_columns($columns)
{
  $columns['featured_image'] = 'Image';
  return $columns;
}
add_filter('manage_posts_columns' , 'custom_columns');


function custom_columns_data($column, $post_id)
{
  switch ( $column )
  {
    case 'featured_image':
        echo the_post_thumbnail('thumbnail');
        break;
  }
}
add_action('manage_posts_custom_column', 'custom_columns_data', 10, 2);

?>
