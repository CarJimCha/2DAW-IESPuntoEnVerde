<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.4.6</title>
</head>
<body>

    <h1>Ejercicio 2.4.6</h1>
    <h2>A continuación, mostramos las variables y sus tipos</h2>
    <?php

        // Asignamos las variables
        $a1 = 347;
        $a2 = 2147483647;
        $a3 = -2147483647;
        $a4 = 23.7678;
        $a5 = 3.1416;
        $a6 = "347";
        $a7 = "3.1416";
        $a8 = "Solo literal" ;
        $a9 = "12.3 Literal con número";
        // $a10 = ""; // Pongo la a10 vacía porque no hay más en el enunciado

        // Mostramos las variables y sus tipos de datos
        echo "Variable a1: " . $a1 . ". Tipo: " . gettype($a1) . ".";
        echo "<br>";
        echo "Variable a2: " . $a2 . ". Tipo: " . gettype($a2) . ".";
        echo "<br>";
        echo "Variable a3: " . $a3 . ". Tipo: " . gettype($a3) . ".";
        echo "<br>";
        echo "Variable a4: " . $a4 . ". Tipo: " . gettype($a4) . ".";
        echo "<br>";
        echo "Variable a5: " . $a5 . ". Tipo: " . gettype($a5) . ".";
        echo "<br>";
        echo "Variable a6: " . $a6 . ". Tipo: " . gettype($a6) . ".";
        echo "<br>";
        echo "Variable a7: " . $a7 . ". Tipo: " . gettype($a7) . ".";
        echo "<br>";
        echo "Variable a8: " . $a8 . ". Tipo: " . gettype($a8) . ".";
        echo "<br>";
        echo "Variable a9: " . $a9 . ". Tipo: " . gettype($a9) . ".";
        echo "<br>";
        // echo "Dado que no había variable para 'a10', introducimos un espacio vacio"
        // echo "Variable a10: " . $a10 . ". Tipo: " . gettype($a10) . ".";

    ?>
    
</body>
</html>