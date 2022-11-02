<?php

 //Declaramos la constante y le damos de valor el 8.
 const producto = 8;
 //Creamos un bucle donde vaya del 1 al 10 para así irlo multiplicando por el 8 con nuestra constante anteriormente creada.
 for($i = 1; $i <= 10; $i++){
    echo " " . $i . "* " . producto . " = " . $i * producto . "<br>"; 
 }