<?php

// Autor: Carlos J

// Crear clase Director
class Director extends Empleado {

    // Creación de atributo
    private $dietas;


    // Constructor
    public function __construct($nombre = "", $apellidos = "", $salario = 56000, $dietas = 1200){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario = $salario;
        self::$numeroEmpleados++;
        $this->id = self::$numeroEmpleados;
        $this->dietas = $dietas;
    }

    
    // Método get
    public function getDietas(){
        return $this->dietas;
    }


    // Método set
    public function setDietas($nuevasDietas){
        $this->dietas = $nuevasDietas;
    }


    // total
    public function total(){
        $total =  $this->salario + $this->dietas;
        return $total;
    }

}

?>