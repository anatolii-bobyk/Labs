<?php
$string="<font color=#FF0000><b>Математичний приклад</b></font>";
$c=$_GET[c];
$d=$_GET[d];
$sum= $c+$d;
$riz= $c-$d;
$dob= $c*$d;
if(d==0){
    echo $dil = ("can't division by zero");
}else{
$dil= $c/$d;
}
echo "$string<br><br> ";
echo "a=$c, b=$d<br><br> ";
echo "<b>Сума </b> $sum<br> ";
echo "<b>Різниця </b> $riz<br> ";
echo "<b>Добуток </b> $dob<br> ";
echo "<b>Частка </b> $dil<br> ";