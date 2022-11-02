<?php
    if (isset($_GET["envio"])) {
        //Estos if comprobarán si está vacio o no el input que se le indica recogiéndolo con un GET.
        if (!empty($_GET["titulo"])) {
            //Declaramos  una variable donde le daremos el valor que hayamos recogido con el GET.
            $titulo = $_GET["titulo"];
            //Asi podremos mostrar por pantalla lo que el usuario ha introducido por teclado.
            echo "<br>Titulo introducido: " . $titulo;
        } //Si no ha cumplido la condición se le mostrará el siguiente mensaje.
        else { 
            echo "<br><h3>No has introducido ningun título.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["autor"])) {
            $autor = $_GET["autor"];
            echo "<br>Autor introducido: " . $autor;
        } else {
            echo "<br><h3>No has introducido ningun autor.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["editorial"])) {
            $editorial = $_GET["editorial"];
            echo "<br>Editorial introducido: " . $editorial;
        } else {
            echo "<br><h3>No has introducido ninguna editorial.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["paginas"])) {
            $paginas = $_GET["paginas"];
            echo "<br>Paginas introducidas: " . $paginas;
        } else {
            echo "<br><h3>No has introducido ninguna página.</h3>";
        }
    }
?>
