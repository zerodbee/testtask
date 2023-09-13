<!DOCTYPE html>

<?php error_reporting(0); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<form method="POST" action="">
    ГЛАВНАЯ ЗАДАЧА:
<input type="submit" name="taskk" value="Изменить Задачу"><br>
<br>
</form>

    <?php

$task2=$_POST['task2'];
    $taskk=$_POST['taskk'];
    $text=$_POST['text'];
    $add=$_POST['add'];

    $number=$_POST['number'];
    $save=$_POST['save'];
    $create=$_POST['create'];
    $delete=$_POST['delete'];
    $dlt=$_POST['dlt'];
    $delete2=$_POST['delete2'];
   


    $wrd = "word.txt";
    $wrd1 = "task.txt";
$file = fopen('word.txt', 'a');
$fil = fopen('word.txt', 'r');

$liness = file($wrd);

$totallines = count($liness);






if (isset($liness[$dlt - 1])) {
    unset($liness[$dlt - 1]);
}

file_put_contents($wrd, implode("",$liness));

if ($taskk) {
    echo "<br>
    <form method=POST class=tests1>
    <br>
    <input type=text name=task2 placeholder=ИзменитьЗадачу>
    <input type=submit name=add2 value=Добавить><br>
    <br>
    <br>";

}




if($_POST['add2']){

        $file0 = fopen($wrd1, 'w');
        
        fwrite($file0, $task2);
        
        fclose($file0);

    }



$file11 = fopen('task.txt', 'r');

if ($file11 !==false) {
    while (($data = fgetcsv($file11, 1000, ";")) !== false) { 
        $out = '';
        for ($i = 0; $i < count($data); $i++) {
            $out .=$data[$i]."<br>";
        }
    echo $out;


    }

}

if ($_POST['add']){
    $newContent = "$text $number мин";

    $ffll = fwrite($file, $newContent.PHP_EOL);
fclose($file); 
}

?>
<br>
ПОДЗАДАЧИ:<br>
<hr>
<?php


 //вывод
$file1 = fopen('word.txt', 'r');

if ($file1 !==false) {
    while (($data = fgetcsv($file1, 1000, ";")) !== false) { 
        $out = '';

        for ($i = 0; $i < count($data); $i++) {
            $out .=$data[$i]." ";
            
        }
    echo $out;
        echo '<hr>';

    }

}






        if ($create) {
            echo "
            <form method=POST class=tests>
            <br>
            <input type=text name=text placeholder=ДобавитьПодзадачу>
            <input type=number min=0 name=number placeholder=Время/мин>
            <input type=submit name=add value=Добавить><br>
            <br>
            ";

            
        }
        if ($delete) {
    echo "<br>
    <form method=POST class=tests1>
    <br>
    <input type=number min=0 max=$totallines name=dlt placeholder=ВведитеНомерСтроки>
    <input type=submit name=delete2 value=Удалить><br>
    <br>
    <br>";

}




?>
    <form method="POST" action="">
            <input type="submit" name="create" value="Создать подзадачу">

    <input type="submit" name="delete" value="Удалить подзадачу" style="color: red;">
    <a href="download.php" style="text-decoration: none;">Скачать документ</a>

    </form>



</body>
</html>