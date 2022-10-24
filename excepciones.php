<?php
 include_once "manejadorexcpeciones.php";
 //calcula el inverso de el numero pasado como parámetro
    
    function inverso($num){
        if($num == 0){
            throw new Minexcpecion("No se puede dividir para cero.");
        }
        return 1/$num;

    }
    try{
        echo "inverso del numero 5 es: " .inverso(5);
    }
    catch(Minexcpecion $e){
        echo "La razón de la excecpción es: " . $e->errorPersonalizado();
    }
    finally{
        echo "Esto siempre se ejecuta";
    }