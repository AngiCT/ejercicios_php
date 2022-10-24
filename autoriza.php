<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de chequeo de credenciales :</h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php
    if (isset($_GET["envio"])) {
        if (!empty($_GET["nombreusuario"])) {
            $usuario = $_GET["nombreusuario"];
            echo "<br>Usuario introducido: " . $usuario;
        } else {
            echo "<br><h3>No has introducido ningun usuario</h3>";
        }
    }
    echo "<br> La contraseña introducida es: " . $_GET["passwd"];

    // Recogida valoes checkbox

    if (isset($_GET['envio'])) {
        if (!empty($_GET['asignaturas'])) {
            $asignaturas = $_GET['asignaturas'];
            foreach ($asignaturas as $asignatura) {
                echo "<br>Te encanta el lenguaje de proogramación : " . $asignatura;
            }
        } else {
            echo "<br> No has elegido ningún lenguaje de programación.";
        }
    }
    if (isset($_GET['envio'])) {
        if (!empty($_GET['menusm'])) {
            $menus = $_GET['menusm'];
            foreach ($menus as $menu) {
                echo "<br>Te encanta el menu : " . $menu;
            }
        } else {
            echo "<br> No has elegido ningún menú.";
        }
    }
    if (isset($_GET['envio'])) {
        $ip = $_GET['ip'];
        if (!empty($ip)) {
            echo "<br> La ip del servidor es: " . $ip;
        } else {
            echo "<br> No se ha podido averiguar la ip.";
        }
    }
    ?>
</body>

</html>