<?php
$post_data = json_decode(file_get_contents('php://input'), true);
$data = $post_data['filedata'];
$filename = "master_file.csv";
file_put_contents($filename, $data, FILE_APPEND);
?>