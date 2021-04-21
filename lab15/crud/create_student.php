<?php
include '../connect/connect.php';
$ID = $_POST['ID'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mathematics_mark = $_POST['mathematics_mark'];
$physics_mark = $_POST['physics_mark'];
$informatics_mark = $_POST['informatics_mark'];
mysqli_query($connect, "INSERT INTO student (`id`,`name`,`surname`,`mathematics_mark`,`physics_mark`,`informatics_mark`) VALUES ('$ID','$name','$surname','$mathematics_mark','$physics_mark','$informatics_mark')");

header('Location: ../lab15.php');
?>