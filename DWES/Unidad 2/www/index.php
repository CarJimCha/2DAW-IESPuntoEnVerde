<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Primer ejemplo</title>
</head>

<body>

    <!-- Primer ejemplo -->
    <h1>Primer ejemplo</h1>
    <p>Esta página web es una página de ejemplo.</p>
    
    <?php
        /*
        Comentario 1
        */
        // Comentario 2
        # Comentario 3
        echo "Hola mundo.";
        echo "<h2>Hola Mundo!</h2>";

        // Débilmente tipado
        $variable = "mivariable";
        echo $variable;
        # echo "<h3>$variable<h3>";

        echo "<p>Primera cadena, " , "segunda cadena</p>";

        // <?$variable; 

        echo "Hey<br>";
        echo 'Hey' . " Bro";

        $numero1 = 4;
        $numero2 = intval("6");
        echo "<br>" . $numero1 + $numero2;
        // strval, intval, floatval => Transforma a X-val

        const VARIABLE = 1;
        echo VARIABLE;

    ?>
    
</body>
</html>