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
		<select id="operacion" name="operacion">
            <!-- Como opción por defecto -->
			<option name="default">Seleccione una operación</option> 
			<option name="sum">Sumar</option>
            <option name="res">Restar</option>
            <option name="mul">Multiplicar</option>
            <option name="div">Dividir</option>
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

            // Si la operación es una suma...

            $operacion = $_POST["operacion"];
            // echo $operacion;

            
            if($operacion  == "Sumar"){
                echo "El resultado de la operación es: ";
                echo $n1+$n2;
            } else if($operacion  == "Restar"){
                echo "El resultado de la operación es: ";
                echo $n1-$n2;
            } else if($operacion  == "Multiplicar"){
                echo "El resultado de la operación es: ";
                echo $n1*$n2;
            } else if($operacion  == "Dividir"){
                if ($n2 == 0){
                    echo "Error: No puedo dividir entre 0.";
                } else {
                    echo "El resultado de la operación es: ";
                    echo $n1/$n2;
                }
            } else {
                echo "Error: Seleccione una operación válida.";
            }
            
        }

    ?></p>

</body>
</html>