<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de un triángulo</title>
</head>
<body>
    
    <h1>Ejercicio 4</h1>

    <h2>CALCULAR ÁREA TRIÁNGULO</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <!-- Introducción de datos de entrada mediante formulario -->
        <label for="cifra">Escribe la base: </label>        
        <input type="number" id="base" name="base"><br>

        <label for="cifra">Escribe la altura: </label>        
        <input type="number" id="altura" name="altura"><br>

        <input type="submit" name="calcArea" value="Calcular el área"><br>

    </form>
    
    <?php
        
        // Cambio del fondo de la página y del texto al calcular el área
        if (isset($_POST["calcArea"])){
            echo "<style> 
                        body { 
                            background-color: blue;
                            color: red
                        }
                </style>";
        }
        
        // Cálculo del área al pulsar el botón
        if (isset($_POST["calcArea"])){
            echo "El área del triángulo cuya base es " . $_POST['base'] . 
                " y altura " . $_POST['altura'] . " es: " . 
                $_POST['base'] * $_POST['altura'] / 2;
        }

    ?>
    
</body>
</html>