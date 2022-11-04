<?php
//declaramos nuestra array con cadenas de paises.
$paises = ["España","Argentina", "Portugal", "Italia"];

//lo mostramos por pantalla con su posición.
print_r($paises);
//Lo mostramos sin su posición.
echo'<br>';
foreach($paises as $pais){
    echo ' ' . $pais;
}