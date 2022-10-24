<?php
    $var1 = 5;
    $var2 = "7";
    $var2 = (int)"7";

    $var3 = (string)8;
    $var4 = "";

        echo "Var1 es del tipo: " .gettype($var3);

        echo "<br> La variable 3 esta definida: ? " . isset($var3);
        echo "<br> La variable 4 esta definida: ? " . isset($var4);

        echo "<br> La variable 3 esta definida: ? " . empty($var3);
        echo "<br> La variable 4 esta definida: ? " . empty($var4);

        const MICONST = 100;

        echo "<br> La constante es : " . MICONST;

        $num1 = 3;
        $num2 = "3";

        if($num1 === $num2){
            echo "<br> Son iguales.";
        }else{
            echo "<br> Son diferentes.";
        }
        
    /*
        variables: [A-Z,a-z,0-9]
            -no pueden comenzar con numeros, ni caracteres especiales (@,#,?,-,...)
            excepto el _.(pero estas serían variables predefinidas).


            Casesensitive:
                JAVA --> SI
                PHP --> a medias:
                        -las variables --> si.
                        $MIVAR diferente $mivar
                        - los metodos --> no
                        METODO1 = metodo1 = Metodo1
        ------
        TIPOS DE DATOS:
            int, string, boolean, float
            arrays, objetos, ficheros

            Tipado de lenguaje programacion:
                -Fuerte: JAVA
                -Debil: PHP
            
                gettype();
            
            CONTROL + MAY + 7 --> Comentas una línea.
        
        --------

        OPERADORES

        =, <, > ... !=, <>, ==, ===, <=>


        foreach($array as $elmto){


        }

        Inclusion de codigo de un fichero en otro:
        include, include_once, require
    */
 