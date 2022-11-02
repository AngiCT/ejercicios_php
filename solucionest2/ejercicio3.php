<?php

 $num = 3;
 echo "Divisores de 3 del 1 al 10: <br>";
 //Este bucle haría lo mismo que el del ejercicio 2 pero con la diferencia de que nos encontramos con una condición dentro de este.
 for($i = 1; $i <= 10; $i++){
     //Lo que hacemos con esta condición es comprobar que los número del bucle(en este caso del 1 al 10) sean divisores de 3.
     //Esto lo conseguimos dividiéndolos por 3 y comprobar que el resto nos daría un 0. Si se cumpliese, lo mostraría por pantalla.
     if($i % 3 == 0){
         echo " " . $i . "<br>";
     }
 }