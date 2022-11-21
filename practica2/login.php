<?php
    function comprobarcredenciales($nombreusu, $clave){
        if($nombreusu === 'normaluser' && $clave === 'usudwes'){
            $credenciales['nombreusu'] = 'normaluser';
            $credenciales['rol'] = 0;
            return $credenciales;
        }
        if($nombreusu === 'adminuser' && $clave === 'admindwes'){
            $credenciales['nombreusu'] = 'adminuser';
            $credenciales['rol'] = 1;
            return $credenciales;
        }
        return false;
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['envio'])){
            $credentials = comprobarcredenciales($_POST['nombreusu'], $_POST['password']);
            $usu = $_POST['nombreusu'];
            if($credentials === false){
                $error = 1;
            }else if($usu === 'normaluser'){
                session_start();
                $_SESSION['loginok'] = $credentials;
                header('Location: recogerusu.php');
            }else if($usu=== 'adminuser'){
                session_start();
                $_SESSION['loginok'] = $credentials;
                header('Location: recogeradmin.php');
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?
        if(isset($error) && $error == 1){
            echo '<p><font color =\'red\'> Credenciales invalidas. </font></p>';
        }
    ?>
    <div class="formulario"> 
        <h1>LOGIN USUARIO</h1>
    <form name="Ejercicio11" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <div class="input-group">
            <input required="" type="text" name="nombreusu" autocomplete="off" class="input">
            <label class="user-label">Nombre Usuario</label>
        </div>
        <div class="input-group">
            <input required="" type="password" name="password" autocomplete="off" class="input">
            <label class="user-label">Contraseña</label>
        </div>
        <input type = "submit" name="envio" id="envio" value="Enviar">
    </form>
    </div>
</body>
</html>

    