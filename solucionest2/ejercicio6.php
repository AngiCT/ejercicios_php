<?php

$equipo = ["Angi","Sara", "Leire", "Andrea", "Raquel"]; // Declaramos un array.

//Mostramos el array por pantalla con el print_r
print_r($equipo);
echo "<br>";

//Recorremos el array con un foreach y mostramos sus valores por pantalla con un echo. Con las etiquetas que hemos escrito nos creara una lista.
echo '<ul>';
foreach ($equipo as $element){
    echo '<li>' . $element . '</li>';
} 
echo '</ul>';