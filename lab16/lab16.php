<?php
session_start();
if(isset($_SESSION['entered'])){
    echo 'Your table';
}
else {
    echo 'failed';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контактна інформація</title>
</head>
<body>

<form method="post">
    <table  border="3" cellspacing="3" cellpadding="3" width="20%" bgcolor="red" align="left">
        <tr>
            <td>Ім`я студента</td>
            <td><input type="text" name="name" value="<?php htmlspecialchars($_POST['name'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Прізвище студента</td>
            <td><input type="text" name="surname" value="<?php htmlspecialchars($_POST['surname'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з математики</td>
            <td><input type="number" name="mathMark" value="<?php htmlspecialchars($_POST['mathMark'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з фізики</td>
            <td><input type="number" name="physicsMark" value="<?php htmlspecialchars($_POST['physicsMark'],ENT_QUOTES); ?>"></td>
        </tr>
        <tr>
            <td>Оцінка з інформатики</td>
            <td><input type="number" name="informaticsMark" value="<?php htmlspecialchars($_POST['informaticsMark'],ENT_QUOTES); ?>"></td>
        </tr>
         <tr>
             <td><input type="submit" value="Зберегти дані у файл"></td>
             <td><input type="submit" value="Вивести дані з файлу " name="add"></td>
         </tr>
    </table>
</form>
</body>
</html>

<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$mathMark = $_POST['mathMark'];
$physicsMark = $_POST['physicsMark'];
$informaticsMark = $_POST['informaticsMark'];

//створення файлу

$file = fopen("data.txt","a+t");
fwrite($file,htmlspecialchars($name) . "\n");
fwrite($file,htmlspecialchars($surname) . "\n");
fwrite($file,htmlspecialchars($mathMark) . "\n");
fwrite($file,htmlspecialchars($physicsMark) . "\n");
fwrite($file,htmlspecialchars($informaticsMark) . "\n");
fclose($file);


//зчитування файлу
if(isset($_POST['add'])){
    $filename = "C:\OpenServer\OpenServer\domains\lab16\data.txt";
    $fileOpen = fopen($filename,"r");
    $contents = fread($fileOpen,filesize($filename));
    fclose($fileOpen);
    echo $contents;
}

?>