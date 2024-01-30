<?php

// Autor: Carlos J

// Crear clase Videojuego
class Videojuego {


    // Atributos privados
    private $titulo;
    private $horasEstimadas;
    private $entregado;
    private $genero;


    // Constructor, entregado siempre vale False al principio
    public function __construct($titulo = "", $horasEstimadas = "", $genero = ""){
        $this->titulo = $titulo;
        $this->horasEstimadas = $horasEstimadas;
        $this->entregado = false;
        $this->genero = $genero;
    }


    // Métodos get, excepto entregado
    public function getTitulo(){
        return $this->titulo;
    }

    public function getHorasEstimadas(){
        return $this->horasEstimadas;
    }

    public function getGenero(){
        return $this->genero;
    }


    // Métodos set, excepto entregado
    public function setTitulo($nuevoTitulo){
        $this->titulo = $nuevoTitulo;
    }

    public function setHorasEstimadas($nuevoHorasEstimadas){
        $this->horasEstimadas = $nuevoHorasEstimadas;
    }

    public function setGenero($nuevoGenero){
        $this->genero = $nuevoGenero;
    }


    // toString
    public function toString(){
        echo "<p>Título: " . $this->titulo . "</p>";
        echo "<p>Numero de temporadas: " . $this->horasEstimadas . "</p>";
        echo "<p>Entregado: " . $this->entregado . "</p>";
        echo "<p>Género: " . $this->genero . "</p>";
    }  
      
}

?>