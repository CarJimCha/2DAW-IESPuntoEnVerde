<?php
    
$mysql =
"mysql:host=localhost;dbname=dwes_manana_pruebas;charset=UTF8";
$user = "may";
$password = "6298482";
$conexion = new PDO($mysql, $user, $password);

    // Incluye ficheros de variables y funciones
    require "utiles/funciones.php";
    require "utiles/variables.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de departamentos</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de departamentos usando fetch (PDO::FETCH_BOUND)</h1>
    //ESte en vez de returnar un array asociativo returna datos mapeados


    <?php
           // Realiza la conexion a la base de datos a través de una función 
            $conexion=conectarPDO($host, $user, $password,$bbdd);
            // Realiza la consulta a ejecutar en la base de datos en una variable
        $consulta="SELECT d.nombre, d.presupuesto, s.nombre 
                    FROM departamentos d INNER JOIN sedes s ON d.sede_id=s.id";
            // Obten el resultado de ejecutar la consulta para poder recorrerlo. El resultado es de tipo PDOStatement
        $resultado=resultadoConsulta($conex,$consulta);

//Estas variables almacenan cada columna entera, asi que se pueden usar para llamar una col y que sea mas facil.
        $resultado->bindColumn(1,$nombreDept);
        $resultado->bindColumn(2, $presupuesto);
        $resultado->bindColumn(3, $nombreSede);

        // Libera el resultado y cierra la conexión
    
    ?>
    <?php
  while($fila=$resultado->fetch(PDO::FETCH_BOUND))
    ?>
        <table border="1" cellpadding="10">
            <thead>
                <th>Departamento</th>
                <th>Presupuesto</th>
                <th>Sede</th>
            </thead>
            <tbody>
                
                <!-- Muestra los datos -->
                <tr>
                    <td><?php echo $nombreDept; ?></td>
                    <td><?php echo $presupuesto; ?></td>
                    <td><?php echo $nombreSede; ?></td>
                </tr>
            </tbody>
        </table>
        <div class="contenedor">
            <div class="enlaces">
                <a href="../index.html">Volver a página de listados</a>
            </div>
        </div>

    
    <?php

        // Libera el resultado y cierra la conexión
    
    ?>
</body>
</html>