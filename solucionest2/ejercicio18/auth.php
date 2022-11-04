<?php
    //Si se ha introducido un nombre, pero no existe ninguna cookie, crearemos una nosotros.
    if(!empty($_POST["nombre"]) && !isset($_COOKIE["nombre"])){
        setcookie("nombre",$_POST["nombre"],time() + 3600);
    }
    //Lo mismo pero con la contraseña.
    if(!empty($_POST["password"]) && !isset($_COOKIE["password"])){
        setcookie("password",$_POST["password"],time() + 3600);
    }
    //Si existen nombre y contraseña, y a parte, también se han creado las cookies nuevas, redirigiremos al usuario a la pagina de home.php
    if(!empty($_POST["nombre"]) && !empty($_POST["password"])){
        //redirige a la pagina home.php
        header("Location: home.php");
        exit(); //die();
    }
   else{
        // borra las cookies y redigir a login.php
        setcookie("nombre",'',time()-72000);
        setcookie("password",'',time()-72000);
        header("Location: login.php");
        exit();
    }
?>