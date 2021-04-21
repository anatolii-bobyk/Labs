<?php
include '../connect/connect.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE from `student` WHERE `student`.`id` = '$id'");
header('Location: ../lab15.php');