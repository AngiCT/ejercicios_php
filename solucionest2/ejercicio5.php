<?php

 const num1 = 193;
 $cont = 0;
 for($i = 2; $i < num1; $i++){
     if(num1 % $i == 0){
         echo " " . $i;
         $cont++;
     }
 }
 if($cont == 0){
     echo "El número " . num1 . " es primo.";
 }