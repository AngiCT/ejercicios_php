<?php
    $mihost = $_SERVER["HTTP_HOST"];
    echo "<br>El host al que va la peticion es: " . $mihost;

    /* mostrar aqui:
        - el nombre del servidor 
        - el lenguaje
        - el nombre de la pagina actual que realiza la solicitud
        - el tipo de navegador que realiza la solicitud
    */

    echo "<br>El lenguahe / idioma : " . $_SERVER["HTTP_ACCEPT_LENGUAJE"];
    echo "<br>Nombre página actual : " . $_SERVER["PHP_SELF"];
    echo "<br>Nombre página actual : " . $_SERVER["HTTP_USER_AGENT"];

    
    