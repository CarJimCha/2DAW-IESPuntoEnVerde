<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <h1>Ejercicio T2.4.8</h1>

    <form action="" method="post">

        <!-- Formulario donde introducimos los datos -->
        <label for="salario">Introduce el salario: </label>        
        <input type="number" id="salario" name="salario"><br>
        <label for="descuento">Introduce el descuento (en porcentaje): </label>        
        <input type="number" id="descuento" name="descuento"><br>

        <!-- Los dos botones -->
        <input type="submit" name="salarioSinDescontar" value="Salario sin descontar el impuesto"><br>
        <input type="submit" name="salarioDescontado" value="Salario una vez descontado el impuesto"><br>

    </form>

    <br>
    
    <?php
        // Primera información
        if (isset($_POST["salarioSinDescontar"])){
            $salario = $_POST['salario'];
            echo "El salario sin descontar el impuesto: " . $salario;
        }

        // Segunda información
        if (isset($_POST["salarioDescontado"])){
            $salario = $_POST['salario'];
            $salarioDescontado = $salario * (100 - $_POST['descuento']) / 100;
            echo "El salario '" . $salario . "' una vez descontado: " . $salarioDescontado;
        }
    ?>

</body>
</html>