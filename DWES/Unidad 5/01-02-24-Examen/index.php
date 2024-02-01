<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Examen PHP 01/02/24</title>
</head>
<body>
    <h1>Index - Examen PHP 01/02/24</h1>
    <p>Por Carlos J</p>

    <?php
        
        // Instanciamos las clases
        require_once("iembalaje.php");
        require_once("cliente.php");
        require_once("papel.php");
        require_once("fotocopia.php");
        require_once("libro.php");

        // crea un cliente "pepe" sin producto asignado
        $pepe = new Cliente("Pepe");

        // Crea una fotocopia a doble cara, tamaño 10 x 20
        $f1 = new Fotocopia(10,20,true);

        // Muestra su superficie
        $f1->calcularEspacio();

        // Haz que pepe compre la fotocopia
        $pepe->comprar($f1);
        
        // Muestra los datos de la fotocopia
        echo "<p>" . $f1->__toString() . "</p>";

        // Muestra las páginas gastadas
        echo "<p>Páginas gastadas: " . $f1->getPaginasGastadas() . "</p>";

        // Muestra las páginas recicladas
        echo "<p>Páginas recicladas: " . $f1->getPaginasRecicladas() . "</p>";

        // Muestra la clientela total
        echo "<p>Clientela total: " . $pepe->getClientela() . "</p>";

        // Elimina el cliente
        $pepe->__destruct();

        // Elimina la fotocopia
        $f1->__destruct();

        // Muestra las páginas gastadas
        echo "<p>Páginas gastadas: " . $f1->getPaginasGastadas() . "</p>";

        // Muestra las páginas recicladas
        echo "<p>Páginas recicladas: " . $f1->getPaginasRecicladas() . "</p>";

        // Muestra la clientela total
        echo "<p>Clientela total: " . $pepe->getClientela() . "</p>";

        // Crea un libro de medidas 12x25 y 200 pag
        $libro = new Libro(12,25,200);

        // Ponle un título sin utilizar funciones
        $libro->titulo = "Los Tres Mosqueteros";

        // Embala 2 unidades
        $libro->embalar(2);

        // Muestra su "volumenEnvoltorio"
        echo "<p>El volumen de envoltorio de dos de estos libros es: " . $libro->embalar(2) . " cm^3.</p>";

        // Crea un cliente llamado Juan que tenga como producto el libro creado
        $Juan = new Cliente("Juan", $libro);

        // Muestra las páginas gastadas => INDICADO POR FRAN: EMBALAR VARIOS LIBROS NO CREA MÁS UNIDADES => No crear más páginas
        echo "<p>Páginas gastadas: " . $f1->getPaginasGastadas() . "</p>";

        // Muestra las páginas recicladas
        echo "<p>Páginas recicladas: " . $f1->getPaginasRecicladas() . "</p>";

        // Muestra la clientela total
        echo "<p>Clientela total: " . $pepe->getClientela() . "</p>";



    
    
    ?>


    
</body>
</html>