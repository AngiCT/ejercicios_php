<?php
if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    //Declararemos una variable para recoger una id.
    $id = $_GET['id'];
    //Con el unset eliminaremos el deseo que hayamos borrado dependiendo de la id.
    unset($deseos[$id]);
    //Actualizamos nuestra cookie.
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    header('Location: home.php');