<?php

    include_once "Asignatura.php";
    include_once "Modulo.php";
    $bbdd = new asignatura("BBDD", 6);
    echo "<br> Se ha creado la asignatura : " . $bbdd->getNombre() . " con el 
    número de créditos : " . $bbdd->getNumeroCreditos();
    Asignatura::setCiclo("DAM");

    echo "<br> " .$bbdd;
    echo "<br>BBDD pertenece al ciclo " . Asignatura::getCiclo();
    $dwes = new Modulo("DWES", 9, "IFC3014");
    echo "<br> " . $dwes;

    Modulo::setCiclo("DAW");
    echo"<br> " . $dwes;
    echo "<br>DWES pertenece al ciclo " . Modulo::getCiclo();