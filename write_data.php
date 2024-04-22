<?php
  $post_data = json_decode(file_get_contents('php://input'), true);
  $data = $post_data['filedata'];
  $file = $post_data['filename'];
  $name = "data/{$file}.csv"; 
  file_put_contents($name, $data);
?>