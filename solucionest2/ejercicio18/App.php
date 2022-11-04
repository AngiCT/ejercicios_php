<?php
class App{
    //He pensado que solo nos haría falta una función, ya que con el login nos funcionaría todo el ejercicio.
    public function login(){
    echo '<h2>Login<h2>';
    include('login.php');

    }
    public function run(){
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }
  public function borrar(){
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
      header('Location: index.php?method=home');
  }
}

?>