<?php
    if(isset($_COOKIE["idioma"]) && isset($_COOKIE["marca"])){
        $idioma = $_COOKIE["idioma"];
        $marca = $_COOKIE["marca"];

        $mensajeidio = '';
        $mensajecoche = '';
        switch($idioma){
            case 'Español':
                $mensajeidio = "Bienvenido, querido usuario";
                $mensajecoche = "Tu marca de coche favorita es: ";
            break;
            case 'Ingles':
                $mensajeidio = "Welcome dear user.";
                $mensajecoche = "Your favourite car brand is : ";
            break;
            case 'Aleman':
                $mensajeidio = "Willkommen lieger Benutzer.";
                $mensajecoche = "Ihre Lieblingsautomarke ist: ";
            break;
            default:
                $mensajeidio = "Bienvenido, querido usuario";
                $mensajecoche = "Tu marca de coche favorita es: ";
        }
    }
    $mensajecoche = $mensajecoche . $marca;

    echo '<h2> ' . $mensajeidio . '</h2>';
    echo '<h2>' . $mensajecoche . '</h2>';