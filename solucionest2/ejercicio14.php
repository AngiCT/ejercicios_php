<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="ejercicio14" action="ejercicio14.php" method="get">
    <p>
            <label for="var1"> Introduce el primer valor: </label>
            <input type="number" name="var1" id="var1" required>
            <label for="var2"> <br>Introduce el segundo valor: </label>
            <input type="number" name="var2" id="var2" required>
    </p>
    <p>
        <select name="menusm[]" id="menu" multiple size ="4" required>
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>
    </p>
    <input type = "submit" name="envio" id="envio" value="Enviar">
    <?php
    echo'<br><br>';
    //comprobación si se ha dado al botón de envío
    if (isset($_GET["envio"])) {
        //Con los geters lo que haces es coger el valor de la variable que se ha introducido anteriormente, entonces se comprueba si se han
        //introducido o no.
        if(isset($_GET['var1']) && isset($_GET['var2'])){
        //Recogemos el valor que se ha introducido y se lo damos a una variable que acabamos de crear.
        $var1=$_GET['var1'];
        $var2 = $_GET['var2'];
        //Creamos 4 variables diferentes que contengan las diferentes operaciones necesarias.
        $suma = $var1 + $var2;
        $resta = $var1 - $var2;
        $mult = $var1 * $var2;
        $div = $var1 / $var2;
        //Este if comprueba que se ha seleccionado una opción de operador.
        if (!empty($_GET['menusm'])) {
            $operador = $_GET['menusm'];
            //Recorreríamos el array de menusm para comprobar con los diferentes if que se ha seleccionado y con un echo, mostrar por pantalla la solución.
            foreach ($operador as $op) {
                if($op == 'suma'){
                    echo 'Suma = ' .$suma ;
                }else if($op == 'resta'){
                    echo 'Resta = ' . $resta;
                }else if($op == 'multiplicacion'){
                    echo 'Multiplicación = ' . $mult;
                }else if($op == 'division'){
                    echo 'División = ' . $div;
                }
            }
        } else {
            echo "<br> No has elegido ningún menú.";
        }
        }   
    }
    ?>
</body>
</html>