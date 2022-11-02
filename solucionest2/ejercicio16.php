<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    <form name="ejercicio16" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    
    <label for="nombre"> Introduce el nombre: </label>
    <input type="text" name="nombre[]" id="nombre">
    <input type = "submit" name="envio" id="envio" value="Enviar">
    <?php
        //Con estos echos haremos que se nos muestre por pantalla los valores introducidos en forma de lista.
        echo'<ul>';
            if(isset($_GET['envio'])){
                //Recorremos el array de nombres que se nos ha enviado desde el formulario del html.
                foreach($_GET['nombre'] as $nombre){
                    //Con este echo vamos guardando nuestros nombres introducidos con una etiqueta hidden al final.
                    echo '<input type="text" name="nombre[]" value = " ' . $nombre . '" hidden>';
                    //Formato de lista.
                    echo '<li> ' . $nombre . '</li>';
                }
            }
        echo '</ul>';  
    ?>
    </form>
</body>
</html>