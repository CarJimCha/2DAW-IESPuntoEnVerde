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
    public function __construct($marca, $color, $plazas = 0, $matricula = "", $kilometros){
        $this->marca = $marca;
        $this->color = $color;
        
        if (is_int($plazas)){
            $this->plazas = $plazas;
        } else {
            $this->plazas = 0;
        }
        
        if ($matricula == $matricula){      // Validar aquí con un regex
            $this->matricula = $matricula;
        } else {
            $this->matricula = $matricula;
            echo "<p>Error en la validación de la matrícula: " . $matricula . ". Por favor, considere arreglarlo con el método setMatricula.</p>";
        }
    }


    // Matricula: get y set


    // puedeCircular => matrícula válida


    // viajar => Va sumando números positivos a kilómetros


    // toString

}

?>