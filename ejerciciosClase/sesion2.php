<?php
    session_start(); // creo o me uno a la sesion

    $nombresesion = session_name();

    echo 'Nombre de sesion creada anteriormente : ' . $nombresesion;
/*
    $_SESSION = array(); //unset($_SESSION)
    session_destroy();
    setcookie(session_name(),'',time() - 7200,'/');
*/
    echo 'La página se ha cargado ' . $_SESSION['contador'];

    echo '<br>Producto: ' .$_SESSION['producto'];