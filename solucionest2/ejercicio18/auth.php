<?php
    /*if(isset($_POST['envio'])){
        //
        setcookie('nombre',)
        $nombre = $_POST['nombre'];
        header('Location: home.php');
    }*/
    if(!empty($_POST["nombre"]) && !isset($_COOKIE["nombre"])){
        setcookie("nombre",$_POST["nombre"],time() + 3600);
    }
    if(!empty($_POST["nombre"])){
        //redirige a la pagina home.php
        header("Location: home.php");
        exit(); //die();
    }
   else{
        // borra las cookies y redigir a ejCookie1.html
        setcookie("nombre",'',time()-72000);
        header("Location: login.php");
        exit();
    }
?>