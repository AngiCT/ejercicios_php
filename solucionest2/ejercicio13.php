
<?php
    //Declaramos un array con los tres posibles nombres que debe introducir.
    $array = ['Angi', 'Guille', 'Raquel'];
    if (isset($_GET["envio"])) {
            if(isset($_GET['nombre'])){
            $nom=$_GET['nombre'];
            if(in_array($nom, $array) && strlen($nom) >= 3){
            echo"Hola " . $nom;
            }else{
                echo $nom . " no es válido.";
            }
        }
    }
