<?php

// Autor: Carlos J

// Crear clase Secretario
class Secretario extends Empleado {

    // Creación de atributo
    public $pulsacionesMinuto;


    // Constructor
    public function __construct($nombre = "", $apellidos = "", $salario = 14000, $pulsacionesMinuto = 90){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario = $salario;
        self::$numeroEmpleados++;
        $this->id = self::$numeroEmpleados;
        $this->pulsacionesMinuto = $pulsacionesMinuto;
    }


    // Método get
    public function getPPM(){
        return $this->pulsacionesMinuto;
    }


    // Método set
    public function setPPM($pulsacionesMinuto){
        $this->pulsacionesMinuto = $pulsacionesMinuto;
    }


    // tiempoEscritura
    public function tiempoEscritura($palabras){
        if (is_int($palabras) && $palabras > 0){
            $tiempo = $palabras / $this->pulsacionesMinuto;
            echo "<p>Dadas " . $palabras . " palabras, tardará " . $tiempo . " minutos en escribirlas.</p>";
        }
        else { 
            echo "<p>El número de palabras introducidas (" . $palabras . ") es inválido. Inténtelo de nuevo.</p>";
        }
    }


}

?>