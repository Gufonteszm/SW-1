<?php

$MSG = "sua média é: ";
$nome = "User";
$M1 = 8;
$M2 = 9;
$M3 = 1;
$media = 0;
$media = (($M1 + $M2 + $M3) / 3);

if ($media >= 9){
    echo "MB";
}
if ($media < 8 && $media >= 7){
    echo "B";
}
if ($media < 7 && $media >= 4){
    echo "R";
}
if ($media < 4){
    echo "I";
}


?>