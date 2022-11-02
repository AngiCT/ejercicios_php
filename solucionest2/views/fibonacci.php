<?php



 function fibonacci(){
    $num1 = 0;
    $num2 = 1;
    $num3 = 1;
    echo "0 ";
    for($i = 1; $i <= 1000000; $i++){
     $suma = $num1 + $num2;
     $num1 = $num2;
     $num2 = $suma;
     print $suma . " ";
 }
 }
 