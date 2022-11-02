<?php
 //Declaramos dos variables que tendran como valor los dos primeros números de la sucesión de fibonacci.
 $num1 = 0;
 $num2 = 1;
 //Este echo nos servirá para mostrar el primer número de la sucesión.
 echo "0 1 ";
 for($i = 1; $i <= 9; $i++){
     //Declaramos una tercera variable para guardar los cálculos y mostrarlos posteriormente por pantalla.
     $suma = $num1 + $num2;
     $num1 = $num2;
     $num2 = $suma;
     print $suma . " ";
 }