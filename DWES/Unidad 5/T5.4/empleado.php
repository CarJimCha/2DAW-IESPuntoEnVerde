<?php

// Autor: Carlos J

// Crear clase empleado
class Empleado {

     // Creación de atributos
     protected $nombre;
     protected $apellidos;
     protected $salario;
     protected $id;
     
     // Este atributo estático lo creamos para facilitarnos las cosas más adelante
     protected static $numeroEmpleados = 0;


    // Constructor
    public function __construct($nombre = "", $apellidos = "", $salario = 14000){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario = $salario;
        self::$numeroEmpleados++;       // Resuelta la duda del ejercicio anterior -> Usaba dos veces el constructor, ergo se activaba dos veces
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

    // Cualquiera de estos podría ser "final", pero vamos a ponerselo a id por asegurar
    final public function getId(){
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

}

?>