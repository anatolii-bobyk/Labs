<?php

$c = $_GET['c'];
$k = $_GET['k'];
$d = exp($c) + (4-sin($c*$k))/pow(sin($k),2);
$l = pow($k,2)/(pow(4+$k,2)) +$c;
//$d = $c + $k;
//$l = $c - $k;
echo "<b>d=</b>$d<br>";
echo "<b>l=</b>$l <br>";

