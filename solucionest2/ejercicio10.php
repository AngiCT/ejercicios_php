<?php

echo "Equipo baloncesto: <br>";

//declarar un array con la valores en la posición y en el elemento.

$equipo = array (
    'base' => 'Angela',
    'escolta' => 'Raquel',
    'alero' => 'Leire',
    'alapivot' => 'Sara',
    'pivot' => 'Andrea'
);

echo'<br>';
//foreach clave->elemento

foreach ($equipo as $position=>$element){
    echo $position . ": " . $element . '<br>';
}