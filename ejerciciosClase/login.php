<?php
    function comprobarcredenciales($nombreusu, $clave){
        if($nombreusu === 'usuario' && $clave === '1234'){
            $credenciales['nombreusu'] = 'usuario';
            $credenciales['rol'] = 0;
            return $credenciales;
        }
        if($nombreusu === 'admin' && $clave === '4567'){
            $credenciales['nombreusu'] = 'admin';
            $credenciales['rol'] = 1;
            return $credenciales;
        }
        return false;
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['envio'])){
            $credentials = comprobarcredenciales($_POST['nombre'], $_POST['password']);
            if($credentials === false){
                $error = 1;
            }else{
                session_start();
                $_SESSION['loginok'] = $credentials;
                header('Location: principal.php');
            }
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
    <?
        if(isset($error) && $error == 1){
            echo '<p><font color =\'red\'> Credenciales invalidas. </font></p>';
        }
    ?>
    <form name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="nombre"> Introduce el nombre: </label>
            <input type="text" name="nombre" id="nombre" >
            <br>
            <label for="password"> Introduce la contraseña: </label>
            <input type="password" name="password" id="password" >
        </p>
        <input type = "submit" name="envio" id="envio" value="Acceder">
    </form> 
</body>
</html>

    