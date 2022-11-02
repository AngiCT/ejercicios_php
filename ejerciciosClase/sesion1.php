<?php
    //crear o unirse a una sesion ya creada
    $array = ['misesion'];
    session_start($array);

    //$_SESSION["NOMBRE_VARIABLE"];

    if(!isset($_SESSION["contador"])){
        $_SESSION['contador'] = 0;
    }else{
        $_SESSION['contador']++;
    }

    echo'He visitado la pagina ' . $_SESSION['contador'] . 'veces.';

    echo'<a href=\'sesion2.php\'>  Siguiente Página</a>';