<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <h1>Calculadora</h1>

    <form action="" method="post">
    
    <!-- Seleccionamos una de las operaciones -->
        <label for="seleccionarOperacion">Seleccione una operación: </label><br><br>
		<select id="operacion" name="operacion" form="operacion">
			<option value="default">Seleccione una operación</option> <!-- Como opción por defecto -->
			<option value="sum">Sumar</option>
            <option value="res">Restar</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select><br>

        <!-- Formulario donde introducimos las cifras -->
        <label for="num1">Introduce la primera cifra: </label>        
        <input type="number" id="num1" name="num1"><br>
        <label for="num2">Introduce la segunda cifra: </label>        
        <input type="number" id="num2" name="num2"><br>

        <!-- Botón de enviar -->
        <input type="submit" name="calc" value="Efectuar operación"><br>
    
    </form>

    <p><?php
        
        if (isset($_POST["calc"])){ // && isset($_POST["operacion"]) => Debería leerlo
            
            // Declaramos los números, para mayor comodidad
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];

            echo "El resultado de la operación es: ";
            // Si la operación es una suma...

            $operacion = $_POST["operacion"];
            echo $operacion;

            /*
            if($operacion  = "sum"){
                echo $n1+$n2;
            } else if($operacion  = "res"){
                echo $n1-$n2;
            } else if($operacion  = "mul"){
                echo $n1*$n2;
            } else if($operacion  = "div"){
                echo $n1/$n2;
            } else {
                echo "Introduzca una operación válida";
            }
            */ 
        }

    ?></p>


</body>
</html>