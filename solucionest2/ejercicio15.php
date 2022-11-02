<?php
//Con estos echos lo que busco es darle forma de un array a lo que salga por pantalla.
echo '[';
 if(isset($_GET['envio'])){
     //Recorremos el array de nombres que se nos ha enviado desde el formulario del html.
    foreach($_GET['nombres'] as $nombre){
        echo  $nombre . ', ';
    }
}
echo']';