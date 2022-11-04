<?php
 //Borramos nuestra cookie deseos,así conseguiremos borrar todos los deseos que hayamos creado.
 setcookie('deseos', '',  time()-7200);
 //Reedirigirá a la misma página de home.php
 header('Location: home.php');