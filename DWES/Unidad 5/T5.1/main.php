<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Persona - Carlos J</title>
</head>
<body>
    <h1>Pruebas de la clase Persona</h1>

    <?php

        // Instanciamos la clase
        require_once("persona.php");

        // Creamos el objeto Persona
        $p = new Persona();

        // Creamos la persona con sus datos
        $p->__construct("Carlos", "Jiménez Chávez", 29);

        // Y probamos sus métodos
        $p->nombreCompleto();
        
        if ($p->mayorEdad()) {
            echo "<p>Esta persona es mayor de edad.</p>"; 
        }
        else {
            echo "<p>Esta persona NO es mayor de edad.</p>"; 
        }
        
        $n = $p->getNombre();
        $a = $p->getApellidos();
        $e = $p->getEdad();

        // Prueba de los get
        echo "<p>" . $n . " " . $a . ", de " . $e . " años de edad.</p>";

        $p->setNombre("Juan");
        $p->setApellidos("Ramos");
        $p->setEdad(21);

        // Prueba 1 de los set
        $p->nombreCompleto();

        $newN = $p->getNombre();
        $newA = $p->getApellidos();
        $newE = $p->getEdad();

        // Prueba 2 de los set
        echo "<p>" . $newN . " " . $newA . ", de " . $newE . " años de edad.</p>";
    ?>

</body>
</html>