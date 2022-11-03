<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item[] = $_POST["lista"];
            //$_POST["listadeseo"][] = $item;
            foreach($item as $it){
                echo' ' . $it;
            }/*
            //echo "<br>Elemento seleccionado: " . $_SESSION["listadeseo"]; 
            $sesioncodif = json_encode($_POST["listadeseo"]); 
            //OPCION 1: decodificarlo como un array.
            $sesiondecodif = json_decode($sesioncodif,true);
            echo'<br><br>';
            //$_SESSION['listadeseo'][4] = 'colonia';
            //var_dump($sesiondecodif); 
            //OPCION 2: decodificarlos como un objeto
            $sesiondecodif = json_decode($sesioncodif);
            //$sesiondecodif ->{'listadeseo'}[6] = 'lampara';
            $miarray = get_object_vars($sesiondecodif);
            print_r($miarray);
            for($i = 0; $i< count($miarray,COUNT_RECURSIVE)-1;$i++){
                echo'<br>Elemento ' . $i . ' es: ' . $miarray['listadeseo'][$i];
            }*/
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar..</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <select name="lista" id="lista">
            <option value="vaqueros">Vaqueros</option>
            <option value="telefono">Telefono movil</option>
            <option value="coche">Coche</option>
            <option value="collar">Collar</option>
            <option value="cd">Cd</option>
        </select>
        <br><br>
        <input type = "submit" name="envio" id="envio" value="Agregar Deseo">
        <br>
        <label for="nombre"> Introduce el nuevo deseo: </label>
        <input type="text" name="deseo" id="deseo">
        <input type = "submit" name="envio" id="envio" value="Agregar Nuevo Deseo">
    </form>
</body>
</html>