<?php
   if(isset($_POST["envio"])){
    if(!empty($_POST["idiomas"]) && !isset($_COOKIE["idiomas"])){
        setcookie("idioma",$_POST["idiomas"],time() + 3600);
    }
    if(!empty($_POST["coches"]) && !isset($_COOKIE["cooches"])){
        setcookie("marca",$_POST["coches"],time() + 3600);
    }
    if(!empty($_POST["idiomas"]) && !empty($_POST["coches"])){
        //redirige a la pagina visualizaopciones.php
        header("Location: visualizaopciones.php");
        exit(); //die();
    }
   }else{
        // borra las cookies y redigir a ejCookie1.html
        setcookie("idioma",'',time()-72000);
        setcookie("marca",'',time()-72000);
        header("Location: ejCookie1.html");
        exit();
    }

