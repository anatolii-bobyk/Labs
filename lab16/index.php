<?php
session_start();
$name = 'Anatolii';
$password = '1234';
if($_SERVER['PHP_AUTH_USER'] == $name &&
   $_SERVER['PHP_AUTH_PW'] == $password){
   $_SESSION['entered'] = 'Successful';

  header('location: lab16.php');
}
else {
    header('WWW-Authenticate: Basic realm = "Restricted area"');
    header('HTTP/1.0 401 Unauthorized');
    die('write correctly');
}


?>