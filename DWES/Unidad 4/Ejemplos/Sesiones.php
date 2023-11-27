<?php 
    // Iniciamos la sesion
    session_name('misesion');
    session_start();

    // Comprobamos que existe una sesion
    // Si no existe, se inicializa
    if (isset($_SESSION['veces'])){
        $_SESSION['veces']++;
    }
    else {
        $_SESSION['veces'] = 1;
    }
    
    if ($_SESSION['veces'] >= 5){
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Sesiones en PHP</title>
</head>
<body>
    <h1>Control de Sesiones en PHP</h1>
    <h2>Ejemplo - Contador de accesos</h2>
    <h3>Sesiones</h3>
    <p>¡Has visitado esta página <?php echo $_SESSION['veces']; ?> veces!</p>
    <p>Recarga esta página para aumentar el contador.</p>
    
    

</body>
</html>