<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Clase Empleado</title>
</head>
<body>

<h1>Pruebas Clase Empleado</h1>
<p>Por Carlos J</p>

<?php

    // Instanciamos la clase
    require_once("empleado.php");

    echo "<h4>Creamos nuestro primer empleado</h4>";
    // Creamos el objeto Empleado
    $p = new Empleado("Carlos", "Jiménez Chávez", 15000);

    echo "<p>Esta la id del empleado: " . $p->getId() . "</p>";

    echo "<p>Este es el número de empleados: " . $p->numeroEmpleados() . "</p>";

    echo "<h4>Creamos un segundo empleado</h4>";
    $p2 = new Empleado("Pepe", "Pérez");
    echo "<p>" . $p2->getNombre() . " " . $p2->getApellidos() . " tiene la id " . $p2->getId() . " y un salario de " . $p2->getSalario() . "</p>";
    echo "<p>Este es el nuevo número de empleados: " . $p->numeroEmpleados() . "</p>";

    echo "<h4>Actualizamos los datos del segundo empleado</h4>";
    $p2->setNombre("Pedrito");
    $p2->setApellidos("Pérez Pérez");
    $p2->setSalario(15000);
    echo "<p>" . $p2->getNombre() . " " . $p2->getApellidos() . " tiene la id " . $p2->getId() . " y un salario de " . $p2->getSalario() . "</p>";

    echo "<h4>Aumentamos en 1000 euros su sueldo.</h4>";
    $p2->aumento(1000);
    echo "<p>" . $p2->getNombre() . " " . $p2->getApellidos() . " tiene la id " . $p2->getId() . " y un salario de " . $p2->getSalario() . "</p>";


    echo "<h4>Tras un tiempo en la empresa, Pedrito se va.</h4>";
    $p2->__destruct();
    echo "<p>Este es el nuevo número de empleados: " . $p->numeroEmpleados() . "</p>";




?>
    
</body>
</html>