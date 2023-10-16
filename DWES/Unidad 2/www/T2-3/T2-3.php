<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>T2.3</title>
</head>

<body>

    <h1>EJERCICIOS PHP</h1>

    <h2>Parte 1:</h2>

    <?php

        // Definimos la dos constantes
        const EurPta = 166.386;
        const PtaEur = 1/166.386;

        // Imprimimos su valor por pantalla
        echo "<p>Valor de la constante \"EurPta\": " . EurPta . "</p>";
        echo "<p>Valor de la constante \"PtaEur\": " . PtaEur . "</p>";     
        
    ?>

    <h2>Parte 1b:</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <!-- action="" == script -->

        <!-- Formulario donde introducimos la cantidad y activamos la conversión -->
        <label for="cifra">Introduce una cifra: </label>        
        <input type="number" id="cifra" name="cifra"><br>

        <input type="submit" name="convertirAPesetas" value="Pasar de euros a pesetas"><br>
        <input type="submit" name="convertirAEuros" value="Pasar de pesetas a euros"><br>

    </form>

    <?php
        
        // En el caso de que se pulse el botón de pasar de euros a pesetas
        if (isset($_POST["convertirAPesetas"])){
            echo $_POST['cifra'], " euros son ";
            echo round($_POST['cifra'] * EurPta, $precision = 2), " pesetas.";
        }

        // En el caso de que se pulse el botón de pasar de pesetas a euros
        if (isset($_POST["convertirAEuros"])){
            echo $_POST['cifra'], " pesetas son ";
            echo round($_POST['cifra'] * PtaEur, $precision = 2), " euros.";
        }


        // A PARTIR DE AHORA SON CORRECCIONES QUE MANTENGO
        // PARA PODER REPASAR MÁS ADELANTE LA MATERIA

        /*
        intval();
        empty();
        isset();
        */

        /*
        $cifra = "";
        $cifra = $_POST[cifra];

        if (isset($_POST[euroPta])){
            echo cifra . " euros son ";
            echo round((cifra * EurPta), 2) . " pesetas.";
        };
        */

        /*        
        if($SERVER["REQUEST_METHOD"] == "POST"){
        */            
            // $cambio = "";
            // $cambio = $_POST["cambio"];

            // if (!empty($cambio)){
            /*  if ($_POST["cambio"] == "Pasar de pesetas a euros"){
                    echo $_POST['cifra'] . " pesetas son ";
                    echo round($_POST['cifra'] * PtaEur, $precision = 2) . " euros.";
                }
                else if ($cambio == "Pasar de euros a pesetas"){
                    echo $_POST['cifra'] . " euros son ";
                    echo round($_POST['cifra'] * EurPta, $precision = 2) . " pesetas.";
                }*/
            // };
              
        
        /*
        # Estos dos funcionan, así que el error debe estar en el if
        echo $_POST['cifra'], " euros son ";
        echo round($_POST['cifra'] * EurPta, $precision = 2), " pesetas.";

        echo $_POST['cifra'], " pesetas son ";
        echo round($_POST['cifra'] * PtaEur, $precision = 2), " euros.";
        */
         

    ?>


</body>