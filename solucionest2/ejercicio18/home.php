<?php 
    //Declaramos una variable para guardarnos los deseos que el usuario introduzca por teclado.
    $new = $_POST['new'];
    //Comprobamos si existe una coockie.
    if (isset($_COOKIE['deseos'])) {
    //declaramos una variable para guardar el valor de la cookie de deseos.
    $deseos= unserialize($_COOKIE['deseos']);
    } else {
    //Si no hay ninguna cookie, la variabke que habíamos creado estará vacía.
    $deseos = [];
    }
    //En nuestro array introduciremos la variable que hemos usado antes para coger el valor que nos han escrito.
    $deseos[] = $new;
    //Declaramos nuestra cookie de deseos.
    setcookie('deseos', serialize($deseos), time() + 3600);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En la etiqueta h1 cogeremos con el $_COOKIE el nombre del usuario y así le daremos la bienvenida.-->
    <h1>Bienvenido <?= $_COOKIE['nombre'] ?></h1>
    <!--En cada h4 le pondremos una etiquta <a> donde el link hará referencia al php "empty.php" para vaciar la lista y
        "cerrar.php" para cerrar sesión  -->
    <h4><a href="empty.php">Vaciar lista de deseos</a></h4>
    <h4><a href="cerrar.php">Cerrar sesión</a></h4>
    <ul>
    <pre>
    <?php
    //Condicón que comprueba si hay algún deseo.
    if (count($deseos)) { 
        //Bucle para sacar nuestra array por pantalla.
        foreach ($deseos as $id => $deseo) {
            //nuesttro href hará referencia a nuestro método borrar y igualaremos la id a la que hayamos sacado, asi 
            //podremos cogerla en nuestro método y borrar una por una la que queramos.
        echo "<li> Deseo nº $id: " . $deseo . ' <a href="?method=borrar&id= "' . $id . '"> borrar</a> </li>';
        }
    }//Si no hay deseos introducidos, saldrá este mensaje por pantalla 
    else {
        echo "No hay deseos todavía";
    }
    ?>
    </ul>
    <h2>Alta de nuevos deseos</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="new">Nuevo deseo</label>
        <input type="text" name="new">
        <input type="submit" value="nuevo">
    </form>
</body>
</html>