<?php
/*
Title: Album Images
Post Type: gallery
Order: 10
Collapse: false
*/
?>

<?php

piklist('field', array(
'type' => 'file'
,'field' => 'as_album_images'
,'scope' => 'post_meta'
,'label' => __('Album image(s)','piklist-demo')
//,'description' => __('Validation rule set: Upload no more than two files.','piklist-demo')
,'options' => array(
  'modal_title' => __('Add Image(s)','piklist-demo')
  ,'button' => __('Add Images','piklist-demo')
)
));
