<?php
   if(isset($_POST["envio"])){
       //comprueba si has introducido un usuario y si no hay ninguna cookie la crea.
    if(!empty($_POST["nombre"]) && !isset($_COOKIE["nombre"])){
        setcookie("nombre",$_POST["nombre"],time() + 3600);
    }
    //comprueba si has introducido una contraseña y si no hay ninguna cookie la crea.
    if(!empty($_POST["password"]) && !isset($_COOKIE["password"])){
        setcookie("password",$_POST["password"],time() + 3600);
    }
    if(!empty($_POST["nombre"]) && !empty($_POST["password"])){
        //redirige a la pagina home.php
        header("Location: home.php");
        exit(); //die();
    }
   }else{
        // borra las cookies y redigir a ejercicio18.html
        setcookie("nombre",'',time()-72000);
        setcookie("password",'',time()-72000);
        header("Location: ejercicio18.html");
        exit();
    }