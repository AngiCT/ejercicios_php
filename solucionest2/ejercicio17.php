<?php

    class App{
        public function __construct($name = 'Aplicación PHP')
        {
            echo 'Construyendo la app <hr>';
            $this->name = $name;
            $this->module='Desarrollo Web en Entorno Servidor';
            $this->teacher = 'Enrique';
            $this->student = 'Ángela Calvo';
        }

        public function index(){
            echo'Estamos en el index<br>';
            include('views/index.php');
        }
        public function fibonacci(){
            echo'Estamos en el fibonacci<br>';
            include('views/fibonacci.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>