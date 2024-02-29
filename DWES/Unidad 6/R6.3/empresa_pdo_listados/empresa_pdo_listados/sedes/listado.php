<?php

    // Incluye ficheros de variables y funciones
    require_once("../utiles/variables.php");
    require_once("../utiles/funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de sedes</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de sedes usando fetch (PDO::FETCH_ASSOC)</h1>
    //este returna un arr asociativo
// LOS DATOS QUE NECESITO AQUI ESTAN EN UTILES/VARIABLES
    <?php
   
        // Realiza la conexion a la base de datos a través de una función 
            //HAY UNA FUNCION CREADA EN UTILES/FUNCIONES
        $conexion=conectarPDO($host, $user, $password,$bbdd);
            // Realiza la consulta a ejecutar en la base de datos en una variable
        $consulta="SELECT nombre, direccion FROM sedes";
            // Obten el resultado de ejecutar la consulta para poder recorrerlo. El resultado es de tipo PDOStatement
        $resultado=resultadoConsulta($conex,$consulta);
    
    ?>

    <table border="1" cellpadding="10">
        <thead>
            <th>Nombre</th>
            <th>Dirección</th>
        </thead>
        <tbody>

            <!-- Muestra los datos -->
            <?php
  while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
    ?>
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