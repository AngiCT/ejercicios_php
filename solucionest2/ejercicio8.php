<?php
    //Creamos un array vacío.
    $equipo[] = '';
    //Vamos introduciendo posición por posición los valores, comenzando por la posición 0.
    $equipo[0] = 'Angi';
    $equipo[1] = 'Sara';
    $equipo[2] = 'Leire';
    $equipo[3] = 'Andrea';
    $equipo[4] = 'Raquel';

    //Recorremos el array con un foreach y mostramos sus valores por pantalla con un echo. Con las etiquetas que hemos escrito nos creara una lista.
    echo '<ul>';
    foreach ($equipo as $element){
        echo '<li>' . $element . '</li>';
    } 
    echo '</ul>';
    