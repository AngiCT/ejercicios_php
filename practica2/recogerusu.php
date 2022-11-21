<?php
    
    session_start();
    if(!isset($_SESSION['loginok'])){
        header('Location: login.php');
    }
    echo '<h2> Bienvenido usuario: </h2>' . $_SESSION['loginok']['nombreusu'];
    echo '<h2> El valor de tu rol: </h2>' . $_SESSION['loginok']['rol'];

    echo '<br><a href=\'logout.php\'>Cerrar Sesión </a>';