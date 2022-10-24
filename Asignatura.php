<?php
/*
    CONCEPTOS:
     - Sobrescritura (métodos)
      -> mismo nombre con mismo número de parámetros, diferente comportamiento.
        -> Clase figura -> método calcular_area
        -> Clase circulo -> método calcular_area
        -> Clase cuadrado -> método calcular_area

     - Sobrecarga (metodos)
      -> mismo método con diferentes número de parámetros.

     - Sobrecarga (constructores)
        - diferentes constructores con el mismo nombre con diferente parámetros.

     - Polimorfismo : objeto que se comporta como otro.
        - casting
        - sobrescritura
        - sobrecarga
        - ligadura dinámica
    
    PHP:
     - Sí existe sobrescritura
     - No existe sobrecarga
     - No hay sobrecarga de constructores
     - Si hay polimorfismo (sobrescritura)
     - public, private, protected. Por defecto public.

    NOTACION:
     - Nombre clases : UpperCamelCase (PascalCase)
     - Nombre métodos : lowerCamelCase

*/

class Asignatura{
    private $nombre = null;
    private $numerocreditos = 6;

    private static $ciclo = null;

    public function __construct($nombre, $numcreditos){
        $this->nombre = $nombre;
        $this->numerocreditos = $numcreditos;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getNumeroCreditos(){
        return $this->numerocreditos;
    }

    function setNumeroCreditos($numerocreditos){
        $this->numerocreditos = $numerocreditos;
    }

    static function getCiclo(){
        return self::$ciclo;
    }

    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }

    function __toString()
    {
        return "<br> Datos de la asignatura : <br>" 
        . "<br> Nombre asignatura : " . $this->nombre
        . "<br> Número créditos: " . $this->numerocreditos;
    }
} // fin_clase
