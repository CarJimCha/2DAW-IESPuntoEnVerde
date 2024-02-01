<?php
// Autor: Carlos J

class Cliente {

    // Variables accesibles desde cliente
    private $nombre;
    private $producto;

    // Variable accesible por todos
    public $apodo;

    // Contador
    private static $clientela = 0;

    // Constructor
    public function __construct($nombre, $producto = null) {
        $this->nombre = $nombre;
        $this->producto = $producto;
        self::$clientela++;
        echo "<p>" . $nombre . " creado.</p>";
    }

    // Destructor
    public function __destruct() {
        self::$clientela--;
    }

    // comprar($prod)
    public function comprar($prod){
        $this->producto = $prod;
    }

    // getProducto
    public function getProducto(){
        return $this->producto;
    }

    // mostrar
    public function mostrar(){
        echo "<p><" . $this->nombre . "> es conocido como <" . $this->apodo . "></p>";
    }

    // Lo necesitaremos para el index
    public function getClientela(){
        return self::$clientela;
    }

}


?>