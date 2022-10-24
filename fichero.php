<?php

    $nombrefichero = "mod.txt";
    $fp = fopen($nombrefichero,"r");

    if(!$fp){
        echo "<br>No he podido leer el fichero";
    }else{
        //leer el fichero caracter a caracter
        
        while(!feof($fp)){
            $caracter = fgetc($fp);
            if($caracter == "\n"){
                echo "</br>";
            }
        }
        //leer línea a línea

        while(!feof($fp)){
            $linea = fgets($fp);
            echo $linea . "<br>";
        }

        //fread
        $contenido = fread($fp,filesize($nombrefichero));
        print_r($contenido); 
    }

    echo "<br>Cerrando el fichero....";
    fclose($fp);

    $fp = fopen($nombrefichero, "a");
    if(!$fp){
        echo "<br>No he podido leer el fichero";
    }else{
        $texto = "esta es otra linea" . PHP_EOL;
        fwrite($fp, $texto);
    }
    fclose($fp);