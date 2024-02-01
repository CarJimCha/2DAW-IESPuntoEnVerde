<?php
// Autor: Carlos J

abstract class Papel{

    // Variables
    protected static $paginasGastadas = 0;
    protected static $paginasRecicladas = 0;
    
    // Variable "privada", pero la vamos a usar para herencia, por lo que...
    protected $dobleCara;

    // Variables "no públicas"
    protected $alto;
    protected $largo;

    // Constructor
    public function __construct($alto, $largo, $dobleCara){
        $this->alto = $alto;
        $this->largo = $largo;
        $this->dobleCara = $dobleCara;
    }

    // calcularEspacio()
    abstract public function calcularEspacio();

    // getDobleCara()
    public function getDobleCara(){
        return $this->dobleCara;
    }

    // toString
    public function __toString(){
        $tam = $this->alto * $this->largo;
        return "<p>Se usa un papel de tamaño (" . $tam . "): <" . $this->alto .
            "> x <" . $this->largo . ".</p>";
    }

    // Lo necesitaremos para el index
    public function getPaginasGastadas(){
        return self::$paginasGastadas;
    }

    public function getPaginasRecicladas(){
        return self::$paginasRecicladas;
    }

}

?>