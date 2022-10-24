<?php

 time(); // tiempo actual en segundos.

 //definir una cookie

 $miarray = ['a'=>"hola", 'b'=>25,'c'=>[1,3,5]];
 $infoguardar = serialize($miarray); // convertirlo todo a una cadena.

 $infojson = json_encode($miarray);
 echo "Descodificacion del array en JSON: ", $infojson;
 $micad = '{}';
 var_dump(json_encode($micad));
 

 setcookie("primeracookie", $infoguardar,time()+300); // una semana
 setcookie("segundacookie", $infojson,time()+600);


 $_COOKIE["primeracookie"];
 echo "<h1>Mi primera cookie</h1>";
 echo"Valor de la coockie: " . $_COOKIE["primeracookie"];
 echo"<br>Valor de la coockie: " . $_COOKIE["segundacookie"];
 echo"<pre>";
 
 var_dump($infojson);


 //var_dump(unserialize($_COOKIE["segundacookie"]));

 echo"<br>Numero de cookies creadas: " . count($_COOKIE);

 //setcookie("primeracookie", "aceptado",time()-120);//tiempo en negativo para invalidar la cookie