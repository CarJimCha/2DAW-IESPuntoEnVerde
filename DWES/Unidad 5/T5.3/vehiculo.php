<?php

// Autor: Carlos J

// Clase Vehiculo
class Vehiculo{

    private $marca;
    private $color;
    private $plazas;
    private $aparcado = true;

    // Constructor, plazas = 0 por defecto, aparcado = true
    public function __construct($marca, $color, $plazas = 0){
        $this->marca = $marca;
        $this->color = $color;
        if (is_int($plazas)){
            $this->plazas = $plazas;
        }
        else {
            $this->plazas = 0;
        }   
    }


    // Get para marca, color y plazas
    public function getMarca(){
        return $this->marca;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPlazas(){
        return $this->plazas;
    }


    // Set para marca, color y plazas
    public function setMarca($nuevaMarca){
        $this->marca = $nuevaMarca;
    }

    public function setColor($nuevoColor){
        $this->color = $nuevoColor;
    }

    public function setPlazas($nuevasPlazas){
        if (is_int($nuevasPlazas)){
            $this->plazas = $nuevasPlazas;
        }
        else {
            echo "<p>El número de plazas introducidas (" . $nuevasPlazas . ") no es correcto.</p>";
        }
    }


    // Aparcar
    public function aparcar(){
        $this->aparcado = true;
    }


    // Arrancar
    public function arrancar(){
        $this->aparcado = false;
    }


    // isAparcado
    public function isAparcado(){
        return $this->aparcado;
    }


    // toString
    public function toString(){
        echo "<p>Marca: " . $this->marca . "</p>";
        echo "<p>Color: " . $this->color . "</p>";
        echo "<p>Número de plazas: " . $this->plazas . "</p>";
        echo "<p>¿Está aparcado?: " . $this->aparcado . "</p>";
    } 


}

?>