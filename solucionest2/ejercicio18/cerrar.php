<?php
//pondremos a nuestras cookies valores negativos para eliminarlas.
 setcookie('deseos', '', time()-7200);
 setcookie('nombre', '',  time()-7200);
 setcookie('password', '',time()-7200);
 //Cuando las eliminemos nos redirigiremos a la página principal.
 header('Location: login.php');