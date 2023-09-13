<?php
$file = 'word.txt';

header('Content-type: application/txt');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));

readfile($file);

?>