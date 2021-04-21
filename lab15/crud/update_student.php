<?php
include '../connect/connect.php';



$idd = $_POST['idd'];
$ID = $_POST['ID'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mathematics_mark = $_POST['mathematics_mark'];
$physics_mark = $_POST['physics_mark'];
$informatics_mark = $_POST['informatics_mark'];
mysqli_query($connect,"UPDATE `student` SET `id` = '$ID',`name` = '$name',`surname` = '$surname',`mathematics_mark` = '$mathematics_mark',`physics_mark` = '$physics_mark',`informatics_mark` = '$informatics_mark' WHERE `id` = '$ID' ");

header('Location: ../lab15.php');