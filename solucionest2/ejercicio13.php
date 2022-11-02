
<?php
    //Declaramos un array con los tres posibles nombres que debe introducir.
    $array = ['Angi', 'Guille', 'Raquel'];
    if (isset($_GET["envio"])) {
            if(isset($_GET['nombre'])){
            $nom=$_GET['nombre'];
            //Con este if comprobaremos que el nombre que se ha introducido, existe en el array que hemos declarado al principio.
            //También comprueba que la longitud del array sea de mayor o igual de 3 caracteres.
            if(in_array($nom, $array) && strlen($nom) >= 3){
            echo"Hola " . $nom;
            }else{
                echo $nom . " no es válido.";
            }
        }
    }
