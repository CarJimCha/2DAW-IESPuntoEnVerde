<?php

// Autor: Carlos J

// Clase Coche que hereda de Vehiculo
class Coche extends Vehiculo{

    private $marca;
    private $color;
    private $plazas;
    private $aparcado = true;

    // Nuevos atributos privados
    private $matricula;
    private $kilometros = 0;  // Por defecto, es 0


    // Constructor
    public function __construct($marca, $color, $plazas = 0, $matricula = ""){
        $this->marca = $marca;
        $this->color = $color;
        
        if (is_int($plazas)){
            $this->plazas = $plazas;
        } else {
            $this->plazas = 0;
        }
        
        if (preg_match_all("/^\d{4} [B-DF-HJ-NPR-TV-Z]{3}$/", $matricula)){      
            $this->matricula = $matricula;
        } else {
            $this->matricula = $matricula;
            echo "<p>Error en la validación de la matrícula: " . $matricula . ". Por favor, considere arreglarlo con el método setMatricula.</p>";
        }
    }


    // Matricula: get y set
    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }


    // puedeCircular => matrícula válida
    public function puedeCircular(){
        if (preg_match_all("/^\d{4} [B-DF-HJ-NPR-TV-Z]{3}$/", $this->matricula)){
            return true;
        } else {
            return false;
        }
    }


    // viajar => Va sumando números positivos a kilómetros
    public function viajar($km){
        if (is_nan($km) || $km < 0){
            echo "<p>La cantidad de kilómetros introducida no es válida.</p>";
        } else {
            $this->kilometros += $km;
        }
    }


    // toString

}

?>