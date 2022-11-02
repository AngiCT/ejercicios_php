<?php
    if (isset($_GET["envio"])) {
        //Comprueba si se ha introducido algún nombre
        if (!empty($_GET["nombre"])) {
            //Lo recoge con un GET y después se muestra por pantalla.
            $nombre = $_GET['nombre'];
            echo 'Nombre introducido es: ' . $nombre;
        } else {
            //Si no se ha introducido ningún nombre, se redirige al la página principal.
            header('Location: ejercicio12.html');
        }
    }
    
