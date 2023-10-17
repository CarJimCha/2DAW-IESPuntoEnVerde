<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar el mayor de tres números</title>
</head>
<body>
    
    <h1>T2.5 - Comparar el mayor de tres números</h1>

    <form action="" method="post">
        <!-- Formulario donde introducimos las cifras -->
        <label for="num1">Introduce la primera cifra: </label>        
        <input type="number" id="num1" name="num1"><br>
        <label for="num2">Introduce la segunda cifra: </label>        
        <input type="number" id="num2" name="num2"><br>
        <label for="num3">Introduce la tercera cifra: </label>        
        <input type="number" id="num3" name="num3"><br>

        <!-- Los submit para ejecutarlo de dos formas distintas -->
        <input type="submit" name="if" value="Comparar con estructura IF"><br>
        <input type="submit" name="switch" value="Comparar con estructura Switch"><br>
    </form>
    

    <?php

        // Estructura IF
        if (isset($_POST["if"])){
            
            // Declaramos las variables, para mayor comodidad
            $cifra1 = $_POST["num1"];
            $cifra2 = $_POST["num2"];
            $cifra3 = $_POST["num3"];

            if ($cifra1 >= $cifra2){
                if ($cifra1 >= $cifra3){
                    echo "El mayor de los tres números es: " . $cifra1;
                }
                else {
                    echo "El mayor de los tres números es: " . $cifra3;
                }
            }
            else {
                if ($cifra2 >= $cifra3){
                    echo "El mayor de los tres números es: " . $cifra2;
                }
                else{
                    echo "El mayor de los tres números es: " . $cifra3;
                }
            }
        }


        // Estructura Switch
        if (isset($_POST["switch"])){
            
            // Declaramos las variables, para mayor comodidad
            $cifra1 = $_POST["num1"];
            $cifra2 = $_POST["num2"];
            $cifra3 = $_POST["num3"];

            // Usamos la nave espacial para comparar ambos números
            // Si son iguales, marca 0.
            // Si el primero es mayor, marca 1.
            // Si el primero es menor, marca -1.
            switch ($cifra1<=>$cifra2) {
                case 0: // Este caso es irrelevante para el objetivo del ejercicio, por eso seguimos al paso siguiente
                case 1:
                    {
                        switch ($cifra1<=>$cifra3) {
                            case 0:
                            case 1:
                                echo "El mayor de los tres números es: " . $cifra1;
                                break;
                            case -1:
                                echo "El mayor de los tres números es: " . $cifra3;
                                break;
                        }
                    }
                    break;
                case -1:
                    {
                        switch ($cifra2<=>$cifra3) {
                            case 0:
                            case 1:
                                echo "El mayor de los tres números es: " . $cifra2;
                                break;
                            case -1:
                                echo "El mayor de los tres números es: " . $cifra3;
                                break;
                        }
                    }

            }
        }

    ?>
</body>
</html>