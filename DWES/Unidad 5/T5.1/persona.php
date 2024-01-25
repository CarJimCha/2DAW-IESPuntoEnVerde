<?php

// Autor: Carlos J

// Crear clase persona
class Persona {
    
    // Atributos privados
    private $nombre;
    private $apellidos;
    private $edad;

    // Constructor
    public function __construct($nombre = "", $apellidos = "", $edad = 18){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    // Métodos get
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getEdad(){
        return $this->edad;
    }

    // Métodos set
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setApellidos($nuevosApellidos){
        $this->apellidos = $nuevosApellidos;
    }

    public function setEdad($nuevaEdad){
        $this->edad = $nuevaEdad;
    }


    // Método mayorEdad
    public function mayorEdad(){
        if ($this->edad > 18){
            return true;
        }
        else {
            return false;
        }
    }


    // Método nombreCompleto
    public function nombreCompleto(){
        echo $this->nombre . " " . $this->apellidos;
    }

}

?>