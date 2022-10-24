<?php
  
  class Modulo extends asignatura{
    private $codigo = null;
    
    function __construct($nombre, $numerocreditos, $codigo)
    {
        $this->codigo = $codigo;
        parent::__construct($nombre, $numerocreditos);
    }

    function getCodigo(){
        return $this->codigo;
    }

    function setCodigo($nuevocod){
        $this->codigo = $nuevocod;
    }

    function __toString()
    {
        return "<br> Datos del MODULO : <br>" 
        . "<br> Nombre del Modulo : " . $this->getNombre()
        . "<br> Número créditos: " . $this->getNumeroCreditos()
        . "<br> Código del módulo: " . $this->codigo;
    }

  }// fin_clase