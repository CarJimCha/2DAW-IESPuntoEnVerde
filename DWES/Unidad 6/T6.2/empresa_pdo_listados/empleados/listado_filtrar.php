<?php

    // Incluye ficheros de variables y funciones
    require_once("../utiles/funciones.php");
    require_once("../utiles/variables.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de empleados (filtrar por salario y/o número de hijos)</h1>
    <div style="margin-bottom: 1em">
      <fieldset style="width:50%">
        <legend>Filtrado</legend>
        <form name="filtrar" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <p><label for="texto">Texto <input type="text" name="texto"></label>
          </p>
          <p><label for="salarioMinimo">Salario mínimo <input type="number" step="0.01" name="salarioMinimo" min="0"></label>
          <label for="salarioMaximo">Salario Máximo <input type="number" step="0.01" name="salarioMaximo" min="0"></label>
          </p>
          <p>Hijos: <select name="hijos">
            <option value="">Seleccione el número de hijos</option>
            <?php
              for ($i=0; $i<=10; $i++):
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
              endfor;
            ?>
          </select>
          </p>
          <input type="submit" value="Filtrar">
        </form>
      </fieldset>
    </div>
      <?php
        
        // Realiza la conexion a la base de datos a través de una función 
        $conexion = conectarPDO($host, $user, $password, $bbdd);

        // Obtenemos los valores del formulario de filtrado
        $texto = obtenerValorCampo("texto");
        $salMin = obtenerValorCampo("salarioMinimo");
        $salMax = obtenerValorCampo("salarioMaximo");
        $hijos = obtenerValorCampo("hijos");
        
        // Crea las condiciones de filtrado
        $condicionesWhere = "";
        $condiciones = [];

        // Condiciones de filtrado
        // Condición de texto
        if($texto!=""){
          $condiciones[] = "e.nombreEmpleado LIKE '%$texto%' 
                                  OR e.apellidos LIKE '%$texto%'
                                  OR e.mail LIKE '%$texto%'";
        }
        
        // Condición de salario
        if($salMin!="" && $salMax!=""){
          $condiciones[] = "salario BETWEEN $salMin AND $salMax";
        }
        else {
          if ($salMin!=""){
            $condiciones[] = "salario >= $salMin";
          }
          if ($salMax!=""){
            $condiciones[] = "salario <= $salMax";
          }
        }

        // Condición de hijos
        if ($hijos!=""){
          $condiciones[] = "hijos >= $hijos";
        }

        // Concatenamos condiciones
        // Si el número de condiciones es mayor que 0
        if (count($condiciones) > 0){
          
          // Inicio del WHERE
          $condicionesWhere = "WHERE ";

          // Recorremos las condiciones añadiendo una a una
          foreach ($condicion as $contador => $valorCondicion) {
            // Concateno cada condición
            $condicion .= $valorCondicion;
            // Y añadimos AND salvo la última vez
            if ($contador < (count($condiciones) -1)){
              $condicionesWhere .= " AND ";
            }
          }
        }
        
        // Realiza la consulta a ejecutar en la base de datos en una variable
        $consulta = "SELECT e.nombre nombreEmpleado,    e.apellidos,        e.email,    
                            e.hijos,                    e.salario,          p.nacionalidad,
                            d.nombre nombreDpto,        s.nombre nombreSede
                            FROM empleados e INNER JOIN paises p ON e.pais_id = p.id
                                              INNER JOIN departamentos d ON e.departamento_id = d.id
                                              INNER JOIN sedes s ON d.sede_id = s.id
                            $condicionesWhere";

        // Obten el resultado de ejecutar la consulta para poder recorrerlo. El resultado es de tipo PDOStatement
        $resultado = resultadoConsulta($conexion, $consulta);
 
        // Muestra los criterios de búsqueda
        
      
      ?> 
      
        <table border="1" cellpadding="10">
          <thead>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Correo electrónico</th>
              <th>Nº hijos</th>
              <th>Salario</th>
              <th>Nacionalidad</th>
              <th>Departamento</th>
              <th>Sede</th>
          </thead>
          <tbody>

              <!-- Muestra los datos -->
              
          </tbody>
        </table>
      
      <div class="contenedor">
          <div class="enlaces">
              <a href="../index.html">Volver a página de listados</a>
          </div>
      </div>

    <?php

        // Libera el resultado y cierra la conexión
        $resultado = null;
        $conexion = null;
    ?>
</body>
</html>
