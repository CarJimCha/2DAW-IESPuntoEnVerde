<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.4 - Pruebas de Herencias</title>
</head>
<body>

    <h1>Pruebas de clases con Herencias</h1>
    <p>Por Carlos J</p>
    <br>

    <?php

        // Instanciamos las clases
        require_once("empleado.php");
        require_once("director.php");
        require_once("secretario.php");

        echo "<h4>Creamos un par de empleados normales y comprobamos algunos métodos</h4>";

        $e = new Empleado("Abel", "Alves");
        echo "<p>" . $e->getNombre() . " " . $e->getApellidos() . " tiene la id " . $e->getId() . " y un salario de " . $e->getSalario() . "</p>";

        $e2 = new Empleado("Benito", "Benitez", 14002);
        echo "<p>" . $e2->getNombre() . " " . $e2->getApellidos() . " tiene la id " . $e2->getId() . " y un salario de " . $e2->getSalario() . "</p>";

        echo "<p>Actualmente contamos con " . $e->numeroEmpleados() . " empleados</p>";


        echo "<h4>Alteramos algunos parámetros del segundo empleado y lo comprobamos</h4>";

        $e2->aumento(500);
        $e2->setNombre("Benito Juan");
        echo "<p>" . $e2->getNombre() . " " . $e2->getApellidos() . " tiene la id " . $e2->getId() . " y un salario de " . $e2->getSalario() . "</p>";


        echo "<h4>Creamos ahora un director</h4>";


        $d = new Director("Dario", "Diaz", 60000, 18000);
        echo "<p>La clase padre es: " . get_parent_class($d) . "</p>";
        echo "<p>" . $d->getNombre() . " " . $d->getApellidos() . " tiene la id " . $d->getId() . " y un salario de " . $d->getSalario() . "</p>";
        echo "<p>Además, cobra unas dietas de " . $d->getDietas() . ", para un total de " . $d->total() . "</p>";

        echo "<h4>Alteramos algunos parámetros del director y lo comprobamos</h4>";

        $d->setDietas(12000);
        echo "<p>Cambiando sus dietas a " . $d->getDietas() . ", el gasto total sería de " . $d->total() . "</p>";
        echo "<p>Actualmente contamos con " . $e->numeroEmpleados() . " empleados</p>";


        echo "<h4>Por último, necesitaremos un secretario</h4>";

        $s = new Secretario("Sergio", "Sánchez", 18000, 100);
        if (is_subclass_of($s, 'Empleado')) {
            echo "<p>Comprobación de que Secretario es una subclase de Empleado</p>";
        }
        echo "<p>" . $s->getNombre() . " " . $s->getApellidos() . " tiene la id " . $s->getId() . " y un salario de " . $s->getSalario() . "</p>";
        echo "<p>Su salario está bien ganado, pues tiene unas PPM de " . $s->getPPM() . "</p>";
        $s->tiempoEscritura(30000);


        echo "<h4>Tras un tiempo en la empresa, el secretario mejora su rendimiento</h4>";
        $s->setPPM(120);
        $s->tiempoEscritura(30000);


        echo "<h4>Comprobamos también que verifica la entrada de datos</h4>";
        $s->tiempoEscritura(-30000);
        $s->tiempoEscritura("Juan");


        echo "<h4>Comprobamos por último que el número de empleados no varia, probemos el método con quien lo probemos:</h4>";
        echo "<p>Abel: " . $e->numeroEmpleados() . "</p>";
        echo "<p>Dario: " . $d->numeroEmpleados() . "</p>";
        echo "<p>Sergio: " . $s->numeroEmpleados() . "</p>";


    ?>

</body>
</html>