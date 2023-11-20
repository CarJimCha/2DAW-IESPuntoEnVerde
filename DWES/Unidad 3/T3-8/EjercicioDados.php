<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

    <!-- Enunciado y descripción del ejercicio -->
    <h1>Jugar a los dados</h1>
    <p>Cada jugador tira 6 dados. Estos deben compararse: el primero con el primero, el segundo con el segundo, etc.
        El jugador que saque un resultado mayor gana la ronda.
        Quien gane más rondas, gana.
        En caso de empate, se desempata atendiendo a la suma total de los dados.
    </p>
    
    <?php 

        // Crear arrays de tiradas
        $tiradasJ1 = array();
        $tiradasJ2 = array();

        // Generamos las tirada de ambos jugadores de manera aleatoria
        for ($i = 0; $i < 6; $i++){
            $tiradasJ1[$i] = rand(1,6);
            $tiradasJ2[$i] = rand(1,6);
        }
        
        // Creamos esta variable para saber cuantas rondas ha ganado cada uno
        $victoriasJ1 = 0;
        $victoriasJ2 = 0;
        
        for ($i = 0; $i < 6; $i++){

            echo "<h2>Ronda " . $i+1 . "</h2>";
            echo "<p>El jugador 1 ha sacado: $tiradasJ1[$i]</p>";
            echo "<p>El jugador 2 ha sacado: $tiradasJ2[$i]</p>";

            if ($tiradasJ1[$i] > $tiradasJ2[$i]){
                $victoriasJ1++;
                echo "<p>¡Ronda para el jugador 1!</p>";
            } else {
                if ($tiradasJ1[$i] < $tiradasJ2[$i]){
                    $victoriasJ2++;
                    echo "<p>¡Ronda para el jugador 2!</p>";
                } else {
                    echo "Esta ronda se considera un empate.";
                }
            }

        }

        // Calculamos los resultados finales
        echo "<h2>Resultados finales</h2>";
        if ($victoriasJ1 > $victoriasJ2){
            echo "<p>¡El jugador 1 gana la partida!</p>";
        }
        if ($victoriasJ1 < $victoriasJ2){
            echo "<p>¡El jugador 2 gana la partida!</p>";
        }

        // Aunque en caso de empate...
        if ($victoriasJ1 == $victoriasJ2){
            echo "<p>Ambos jugadores han ganado el mismo número de rondas.</p>";

            // Calculamos la suma total de sus tiradas
            $sumaJ1 = 0;
            $sumaJ2 = 0;
            for ($i = 0; $i < 6; $i++) {
                $sumaJ1 = $sumaJ1 + $tiradasJ1[$i];
                $sumaJ2 = $sumaJ2 + $tiradasJ2[$i];
            }

            // Mostramos y comparamos
            echo "<p>Recurrimos pues al desempate:</p>";
            echo "<p>El jugador 1 ha sacado un total de $sumaJ1, mientras que el jugador 2 ha sacado un total de $sumaJ2.</p>";

            // Y conclusiones
            if ($sumaJ1 > $sumaJ2){
                echo "<p>¡El jugador 1 gana el desempate!</p>";
            }
            if ($sumaJ1 < $sumaJ2){
                echo "<p>¡El jugador 2 gana el desempate!</p>";
            }
            if ($sumaJ1 == $sumaJ2){
                echo "<p>¡El empate es definitivo!</p>";
            }
        }
        
    ?>

</body>
</html>