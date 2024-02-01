<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.6 - Pruebas de Interfaces</title>
</head>
<body>

    <h1>Interfaces</h1>
    <p>Por Carlos J</p>
    <br>

    <?php

        // Instanciamos las clases
        include_once("subjefe.php");
        include_once("contable.php");

        echo "<h4>Creamos ahora un subjefe</h4>";

        $s = new Subjefe("Santiago", "Sanchez", 30000, 900);
        echo "<p>El subjefe " . $s->getNombre() . " " . $s->getApellidos() . " tiene un salario total de " . $s->total() . " euros anuales.</p>";


        echo "<h4>Creamos ahora un contable</h4>";

        $c = new Contable("Charo", "Cabeza", 16000);
        echo "<p>La contable" . $c->getNombre() . " " . $c->getApellidos() . " teletrabaja " . $c->getTeletrabajo() . " días al mes.</p>";

        echo "<br>";

        echo "<p>Primera modificación de jornada:</p>";
        $c->diaEnCasa();
        $c->diaEnCasa();
        $c->diaEnCasa();
        echo "<p>La contable" . $c->getNombre() . " " . $c->getApellidos() . " teletrabaja " . $c->getTeletrabajo() . " días al mes.</p>";

        echo "<br>";
        
        echo "<p>Segunda modificación de jornada:</p>";
        $c->vueltaRutina();
        echo "<p>La contable" . $c->getNombre() . " " . $c->getApellidos() . " teletrabaja " . $c->getTeletrabajo() . " días al mes.</p>";


        echo "<h4>Tras unos meses de trabajo y un error administrativo de por medio, aumentamos el sueldo del subjefe</h4>";

        // $s->aumento("mil");
        $s->aumento(1000);
        echo "<p>El subjefe " . $s->getNombre() . " " . $s->getApellidos() . " tiene un salario total de " . $s->total() . " euros anuales.</p>";

        
        echo "<h4>Sin embargo, con la llegada de la crisis, los salarios caen, lo que afecta más a unos que a otros...</h4>";
        $s->crisis(10);
        echo "<p>El subjefe" . $s->getNombre() . " " . $s->getApellidos() . " tiene un salario total de " . $s->total() . " euros anuales.</p>";

        $c->crisis(10);
        echo "<p>La contable" . $c->getNombre() . " " . $c->getApellidos() . " tiene un salario total de " . $c->getSalario() . ".</p>";

        
        echo "<h4>Comprobamos que se ha utilizado la interfaz adecuada.</h4>";
        if (interface_exists('trabajador')){
            print_r(get_declared_interfaces());
        }

    ?>
    
</body>
</html>