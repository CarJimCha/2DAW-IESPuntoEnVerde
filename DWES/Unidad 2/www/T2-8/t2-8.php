<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2-8</title>
</head>
<body>

    <?php

    // Declaramos el número de líneas que queremos
    $tamaño = 10;

    // Este primer for se encarga de pintar todas las líneas necesarias
    for($i=0; $i<=$tamaño; $i++){  

        // Este for pinta los espacios
        for($j = 0; $j < $i; $j++) {
            echo "&nbsp&nbsp"; // " " = "&nbsp", pero " " no lo interpreta correctamente
        }
        
        // Este for, las estrellas
        for($k = 0; $k < 2 * ($tamaño - $i) - 1; $k++) {
            echo "*";
        }

        // Y al final, introducimos el salto de línea
        echo "<br>";
        
    }

    ?>

</body>
</html>