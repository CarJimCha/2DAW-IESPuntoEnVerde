<?php

// Autor: Carlos J

// Instanciamos la interfaz
require_once("trabajador.php");

// Crear clase Contable
class Contable {

    // Creación de atributos
    protected $nombre;
    protected $apellidos;
    protected $salario;
    protected $teletrabajo = 0;


    // Constructor
    public function __construct($nombre = "", $apellidos = "", $salario = 20000){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario = $salario;
    }

    
    // Métodos get
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getTeletrabajo(){
        return $this->teletrabajo;
    }

    public function getSalario(){
        return $this->salario;
    }


    // Métodos set
    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setApellidos($nuevosApellidos){
        $this->apellidos = $nuevosApellidos;
    }


    // diaEnCasa
    public function diaEnCasa() {
        $this->teletrabajo =+ 1;
    }


    // vueltaRutina
    public function vueltaRutina(){
        $this->teletrabajo = 0;
    }


    // Implementamos los métodos de la interfaz
    public function aumento($dinero){
        // Se valida el aumento
        if (!(is_nan($dinero)) && ($dinero > 0)){
            $this->salario =+ $dinero;
        }
        else {
            echo "<p>La cifra introducida (" . $dinero . ") no es válida.</p>";
        }
    }

    public function crisis($porcentaje){
        // Se valida el porcentaje
        if (!(is_nan($porcentaje)) && ($porcentaje > 0) && ($porcentaje < 100)){
            $nuevoSalario = ($this->salario) * (100 - $porcentaje) / 100;
            // Se compara con el SMI
            if ($nuevoSalario > 15876){
                $this->salario = $nuevoSalario;
            }
            else {
                echo "<p>El salario no puede reducirse por debajo del SMI.</p>";
                $this->salario = 15876;
            }
        }
        else {
            echo "<p>El porcentaje introducido (" . $porcentaje . ") no es válido.</p></p>";
        }
    }

}

?>