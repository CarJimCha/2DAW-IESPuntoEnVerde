<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <!-- Enunciado y descripción del ejercicio -->
    <h1>Cuenta cartas</h1>
    <p>Si ningún número de cartas coincide con el número escrito encima de ella,
        habrás ganado, en caso contrario habrás perdido.
    </p>
    
    <?php
        // CORRECCIÓN

        // Necesito un número entre 5 y 10 para conseguir ese número de cartas
        $numCartas = rand(5,10);

        // Crear array con esos valores NO REPETIDOS
        $cartasNumericas = range(1,10);
        shuffle($cartasNumericas);

        // Partimos de que estoy ganando hasta que un valor coincida con la carta
        $victoria = 0;

        // Recorremos el array y sacamos las cartas
        for ($i = 0; $i < $numCartas; $i++){
            echo "<p>" . $i+1 . "</p>";
            echo '<p><img src="c' . $cartasNumericas[$i] . '.svg" width="50"></p>';

            if ($i+1 == $cartasNumericas[$i]) {
                $victoria++;
            }
        }

        // Mensaje de victoria o derrota
        if ($victoria == 0){
            echo "<p>¡Enhorabuena has ganado!</p>";
        } else {
            echo "<p>Lo siento has perdido</p>";
        }
        
    ?>

</body>
</html>