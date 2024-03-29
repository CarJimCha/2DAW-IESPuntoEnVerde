<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T5.5 - Interfaces</title>
</head>
<body>
    <h1>INTERFACES</h1>

    <?php
        
        // Instanciamos las clases
        require_once("serie.php");
        require_once("videojuego.php");
        // require_once("entregable.php");


        // Creamos los objetos para meterlos en el array
        $TWD = new Serie("The Walking Dead",2,"Ficción");
        $GOT = new Serie("Juego de Tronos", 7, "Fantasía");
        $DEX = new Serie("Dexter", 5, "Policiaca");
        $FMA = new Serie("Fullmetal Alchemist", 5, "Anime");
        $DOR = new Serie("Doraemon", 26, "Anime");

        $PKMA = new Videojuego("Pokémon Acero", 40, "Aventuras");
        $PKMB = new Videojuego("Pokémon Blanco", 42, "Aventuras");
        $PKMC = new Videojuego("Pokémon Cristal", 44, "Aventuras");
        $PKMD = new Videojuego("Pokémon Diamante", 46, "Aventuras");
        $PKME = new Videojuego("Pokémon Esmeralda", 48, "Aventuras");


        // Y los introducimos en dos arrays distintos
        $arraySeries = array();
        $arraySeries[] = $TWD;
        $arraySeries[] = $GOT;
        $arraySeries[] = $DEX;
        $arraySeries[] = $FMA;
        $arraySeries[] = $DOR;

        // $arraySeries[$ejemplo] = new Serie("Ejemplo", 10, "GOAT");   // Prueba de implementarlo directamente en el array

        $arrayJuegos = array();
        $arrayJuegos[] = $PKMA;
        $arrayJuegos[] = $PKMB;
        $arrayJuegos[] = $PKMC;
        $arrayJuegos[] = $PKMD;
        $arrayJuegos[] = $PKME;


        // Entregamos algunos videojuegos y series
        $GOT->entregar();
        $DEX->entregar();
        $PKMD->entregar();
        $PKME->entregar();

        $TWD->toString();
        $GOT->toString();


        // Cuenta cuantas series y videojuegos hay entregados
        // Al contarlos, devuelvelos (devolver)



        // Indica el videojuego con más horas estimadas y la serie con más temporadas
        // Muestra sus datos en pantalla con toda su información (toString)




    ?>
    
</body>
</html>