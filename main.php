<?php


$filename = "/opt/lampp/htdocs/testtask/task.txt";
$file = fopen($filename, 'w');

if($file) {
    echo "Файл успешно создан.";
    fclose($file);
} else {
    echo "Произошла ошибка при создании файла.";
}


?>