<?php
    //Creamos un array vacío.
    $paises[] = '';
    //Vamos introduciendo posición por posición los valores, comenzando por la posición 0.
    $paises[0] = 'España';
    $paises[1] = 'Argentina';
    $paises[2] = 'Portugal';
    $paises[3] = 'Italia';


    //lo mostramos por pantalla.
    print_r($paises);

    //Lo mostramos sin su posición.
    echo'<br>';
    foreach($paises as $pais){
        echo ' ' . $pais;
    }