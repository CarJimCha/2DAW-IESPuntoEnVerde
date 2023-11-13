<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-1 - Ejercicio 1</title>
</head>
<body>

    <h2>Ejercicio 1</h2>
    <p>Realizar un programa que obtenga los números impares entre 1 y 50.
        Una vez obtenido el resultado, comprobar cuales son números primos.</p>
    <p>La evaluación de los números impares y primos se hará con funciones.</p>

    <?php
        
        function esImpar($num){
            if ($num % 2 == 0){
                return false;
            }
            else {
                return true;
            }
        }

        function esPrimo($num){
            $check = 0;
            if ($num == 1){
                $check = 1;
            }
            else { 
                for ($i = 2; $i <= $num/2; $i++){
                    if ($num % $i == 0){
                        $check = 1;
                    }
                }
            }
            if ($check == 0){
                return true;
            } else {
                return false;
            }
        }

        for ($num = 1; $num <= 50; $num++) {
            if (esImpar($num) && esPrimo($num)){
                echo $num;
                echo "<br>";
            }
        }
    ?>
    
</body>
</html>