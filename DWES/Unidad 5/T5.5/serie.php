<?php

// Autor: Carlos J

// Crear clase Serie
class Serie {


    // Atributos privados
    private $titulo;
    private $numeroTemporadas;
    private $entregado;
    private $genero;


    // Constructor, entregado siempre vale False al principio
    public function __construct($titulo = "", $numeroTemporadas = "", $genero = ""){
        $this->titulo = $titulo;
        $this->numeroTemporadas = $numeroTemporadas;
        $this->entregado = false;
        $this->genero = $genero;
    }


    // Métodos get, excepto entregado
    public function getTitulo(){
        return $this->titulo;
    }

    public function getNumeroTemporadas(){
        return $this->numeroTemporadas;
    }

    public function getGenero(){
        return $this->genero;
    }


    // Métodos set, excepto entregado
    public function setTitulo($nuevoTitulo){
        $this->titulo = $nuevoTitulo;
    }

    public function setNumeroTemporadas($nuevoNumeroTemporadas){
        $this->numeroTemporadas = $nuevoNumeroTemporadas;
    }

    public function setGenero($nuevoGenero){
        $this->genero = $nuevoGenero;
    }


    // toString
    public function toString(){
        echo "<p>Título: " . $this->titulo . "</p>";
        echo "<p>Numero de temporadas: " . $this->numeroTemporadas . "</p>";
        echo "<p>Entregado: " . $this->entregado . "</p>";
        echo "<p>Género: " . $this->genero . "</p>";
    }  
      
}

?>
