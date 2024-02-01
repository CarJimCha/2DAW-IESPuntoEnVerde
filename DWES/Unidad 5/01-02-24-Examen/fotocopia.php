<?php
// Autor: Carlos J

class Fotocopia extends Papel{

    // Constructor
    public function __construct($alto, $largo, $dobleCara = false){
        $this->alto = $alto;
        $this->largo = $largo;
        $this->dobleCara = $dobleCara;

        // incrementar paginasGastadas
        self::$paginasGastadas++;
    }

    // Destructor
    public function __destruct(){
        // incrementa paginasRecicladas
        self::$paginasRecicladas++;
    }

    // toSring
    public function __toString(){
        $tam = $this->alto * $this->largo;
        
        // Adicional: muestra si es doble cara o no
        if ($this->dobleCara == true){
            return "<p>Se usa un papel de tamaño (" . $tam . "): " . $this->alto .
            " x " . $this->largo . ". Además, la fotocopia es a doble cara.</p>";
        }
        else {
            return "<p>Se usa un papel de tamaño (" . $tam . "): " . $this->alto .
            " x " . $this->largo . ". Además, la fotocopia es a doble cara.</p>";
        }
    }

    // calcularEspacio porque hereda de papel
    public function calcularEspacio(){
        // Muestra la superficie (alto x largo)
        $superficie = $this->alto * $this->largo;
        echo "<p>La superficie de la fotocopia es: " . $superficie ."</p>";
    }

}


?>