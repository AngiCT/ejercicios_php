<?php

if (isset($_GET["envio"])) {
    if(isset($_GET['var1']) && isset($_GET['var2'])){
    $var1=$_GET['var1'];
    $var2 = $_GET['var2'];
    if (!empty($_GET['menusm'])) {
        $operador = $_GET['menusm'];
        foreach ($operador as $op) {
            if($op == 'suma'){
                echo 'Suma = ' . $var1 + $var2;
            }else if($op == 'resta'){
                echo 'Resta = ' . $var1 - $var2;
            }else if($op == 'multiplicacion'){
                echo 'Multiplicación = ' .$var1 * $var2;
            }else if($op == 'division'){
                echo 'División = ' . $var1 / $var2;
            }
        }
    } else {
        echo "<br> No has elegido ningún menú.";
    }
}
}