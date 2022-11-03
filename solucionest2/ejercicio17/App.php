<?php

    class App{
        public function __construct($name = 'Aplicación PHP')
        {
            echo 'Construyendo la app <hr>';
            $this->name = $name;
            $this->module='Desarrollo Web en Entorno Servidor';
            $this->teacher = 'Enrique';
            $this->student = 'Ángela Calvo';
        }

        
        public function fibonacci(){
            //Introducimos un encabezado a la clase.
            echo'<br>';
            echo'<h3> Sucesión de fibonacci</h3>';
            echo'<br>';
            //Declaramos dos variables que tendran como valor los dos primeros números de la sucesión de fibonacci.
            $num1 = 0;
            $num2 = 1;
            $num3 = 1;
            //Este echo nos servirá para mostrar el primer número de la sucesión.
            echo "0 1 ";
            for($i = 1; $i <= 30; $i++){
            //Declaramos una tercera variable para guardar los cálculos y mostrarlos posteriormente por pantalla.
            $suma = $num1 + $num2;
            $num1 = $num2;
            $num2 = $suma;
            print $suma . " ";
        
        }
        }
        public function factorial(){
            //Introducimos un encabezado a la clase.
            echo'<br>';
            echo'<h3> Numeros factoriales: </h3>';
            echo'<br>';
            //El más cercano al millón es el 9 ya que el 10 se pasa, por lo que nuestra variable le daremos ese valor.
            $num = 9;  
            $factorial = 1; 
            for ($x=$num; $x>=1; $x--)   
            {  
             $factorial = $factorial * $x; 
             echo ' ' . $factorial; 
            }  
        }
        public function primos(){
            //Introducimos un encabezado a la clase.
            echo'<br>';
            echo'<h3> Numeros primos del 1 al 10000</h3>';
            echo'<br>';
            //Hacemos un bucle donde recorra del 1 al 10000
            for($i = 1; $i < 10000; $i++){
                //Inciamos un contador a 0
                $cont = 0;
                //Realizamos otro bucle donde vaya del 1 a $i que sera nuestra variable donde cogemos los números que queremos comprobar
                for($j = 1; $j <= $i; $j++){
                    //esta condicion nos servirá para contar los divisores que tiene cada número.
                    if($i % $j === 0){
                       $cont++;
                    }
                }
                //Si el contador es igual a 2, querrá decir que el número es primo, por lo que lo mostraremos por pantalla.
                if($cont == 2){
                    echo '  ' .$i .',';
                }
            }
            
        }
        public function potencia(){
            //Introducimos un encabezado a la clase.
            echo'<br>';
            echo'<h3>Potencias de 2</h3>';
            echo'<br>';
            //declaramos una variable para sacar sus potencias. En este caso su valor será el 2
            $num = 2;
            //Realizamos un bucle hasta el 24.
            for($i = 1; $i <= 24; $i++){
                //Declaramos una variable donde guardaremos los resultados de nuestra operación.
                $numero_elevado = pow($num, $i);
                //Lo sacamos por pantalla.
                echo $numero_elevado . ' ,';
            }
        } 
    }
?>
