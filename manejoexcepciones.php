<?php

    class Minexcpecion extends Exception{
        public function errorPersonalizado(){
            $menserror = "Información del error: " . $this->getMessage() . 
            "<br>Fichero que genera el error " . $this->getFile(). 
            "<br>Linea en la que se produce el error" . $this->getLine();
            return $menserror;
        }
    }