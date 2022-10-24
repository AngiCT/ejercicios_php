<?php

$var1 = 6;
$var2 = 7;

function suma($a, $b){
    global $var1;
    global $var2;
    $var1 = 99;
    $var2 = 100;

    unset($var2);

    echo "<br>La variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
}