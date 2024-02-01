<?php
// Autor: Carlos J

class Libro extends Papel implements iembalaje{

    // Variable accesible para todo el programa
    public $titulo;

    // Variables no accesibles
    protected $paginas;
    protected $ancho;

    // dobleCara siempre verdadero
    protected $dobleCara;

    // margen por la interfaz iembalaje

    // Constructor
    public function __construct($largo, $alto, $npaginas){
        $this->largo = $largo;
        $this->alto = $alto;
        $this->paginas = $npaginas;
        $this->ancho = $npaginas / 100;
        
        // No es necesario, pero me pide que lo inicialice...
        $this->dobleCara = true;

        // Aumento numero de paginasGastadas
        self::$paginasGastadas += $npaginas;
    }

    // Destructor
    public function __destruct(){
        self::$paginasRecicladas -= $this->paginas;
    }

    // toString
    public function __toString(){
        return "<p>Libro de " . $this->paginas . " páginas titulado " .
            $this->titulo . "</p>";
    }

    // calcularEspacio porque hereda de papel
    public function calcularEspacio(){
        // Muestra la superficie (alto x largo x ancho)
        $superficie = $this->alto * $this->largo * $this->ancho;
        echo "<p>La superficie de la fotocopia es: " . $superficie ."</p>";
    }

    // embalar($unidades) que implementa de iembalaje
    public function embalar($unidades){
        $margen = 1;
        $largoEmb = $this->largo + $margen * 2;
        $altoEmb = $this->alto + $margen * 2;
        $anchoEmb = $this->ancho * $unidades + $margen * 2; 
        
        $volumenEnvoltorio = $largoEmb * $altoEmb * $anchoEmb;
        
        return $volumenEnvoltorio;

        // De "crear" más libros para embalar, es decir, si necesitara más páginas...
        // self::$paginasGastadas += $this->paginas;
        // Por si te hubiera entendido yo mal...
    }
}


?>