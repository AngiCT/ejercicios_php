<?php

//Borra las cookies anteriormente creadas.
setcookie("nombre",$_POST["nombre"],time() - 7200);
setcookie("password",$_POST["password"],time() - 7200);
//redirige a la página principal.
header('Location: ejercicio18.html');