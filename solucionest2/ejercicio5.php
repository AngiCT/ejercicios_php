<?php
 //Declaramos una constante con uno de los números que se nos han dicho en el enunciado del ejercicio.
 const num1 = 193;
 $cont = 0;
 //Este bucle empezará desde el dos y acabará un número antes del valor de la constante ya que todos los número se pueden dividir por 1 y por
 //ellos mismos.
 for($i = 2; $i < num1; $i++){
     //Esta condición comprueba si al dividir la constante por alguno de los números del bucle de resto da 0.
     if(num1 % $i == 0){
         echo " " . $i; //Muestra los divisores de la constante.
         $cont++; //Este contador contará el número de divisores que hay.
     }
 }
 //Si el contador es igual a 0 quiere decir que no ha contado ningún divisor, por lo que el número será primo.
 if($cont == 0){
     echo "El número " . num1 . " es primo.";
 }