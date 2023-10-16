<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2.4.7</title>
</head>
<body>
    <h1>Ejercicio T2.4.7</h1>
    
    <?php

        print ("<h2>Mostramos las variables originales:</h2>");

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


        // Usamos el settype para forzarles un cambio de tipo de dato
        settype($a1, "double");
        settype($a2, "double");
        settype($a3, "double");
        settype($a4, "integer");
        settype($a5, "integer");
        settype($a6, "double");
        settype($a7, "integer");
        settype($a8, "double");
        settype($a9, "integer");

        print ("<h2>Mostramos las variables tras los cambios:</h2>");

        // Volvemos a mostrar las variables y sus tipos de datos tras los cambios
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

    ?>
</body>
</html>