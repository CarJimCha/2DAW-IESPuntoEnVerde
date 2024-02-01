<?php

// Autor: Carlos J

// Crear clase empleado
class Empleado {

    // Creación de atributos
    private $nombre;
    private $apellidos;
    private $salario;
    private $id;
    
    // Este atributo estático lo creamos para facilitarnos las cosas más adelante
    private static $numeroEmpleados = 0;


    // Constructor
    public function __construct($nombre = "", $apellidos = "", $salario = 14000){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario = $salario;
        self::$numeroEmpleados++;     
        $this->id = self::$numeroEmpleados;
    }

    
    // Métodos get
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function getId(){
        return $this->id;
    }


    // Métodos set
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setApellidos($nuevosApellidos){
        $this->apellidos = $nuevosApellidos;
    }

    public function setSalario($nuevoSalario){
        $this->salario = $nuevoSalario;
    }


    // numeroEmpleados
    public function numeroEmpleados(){
        return self::$numeroEmpleados;
    }


    // aumento
    public function aumento($dinero){
        if (is_nan($dinero) || $dinero < 0){
            echo "<p>La cifra introducida (" . $dinero . ") no es válida.</p>";
        } else {
            $this->salario += $dinero;
        }
    }


    // destruct
    public function __destruct() {
        self::$numeroEmpleados--;
    }

}

?>