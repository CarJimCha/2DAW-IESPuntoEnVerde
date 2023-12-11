<?php
// Inicia la sesión
session_start();

// Verifica si se pulsa iniciar sesión.
if (isset($_POST['iniciar'])) {
    $_SESSION['agenda'] = array();
}

// Verifica si el usuario ha cerrado sesión
if (isset($_POST['cerrar'])) {
    // Borra variables de sesión
    session_unset();
    // Cierra sesión
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Verifica si el usuario ha guardado un contacto
if (isset($_POST['guardar']) && isset($_POST['contacto'])) {
    $_SESSION['agenda'][] = $_POST['contacto'];
    $mensaje = "Contacto guardado correctamente.";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
    <h1>Agenda con sesiones</h1>
</head>

<body>

    <?php
    // Si el usuario ha iniciado sesión, muestra los elementos correspondientes
//if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    if (isset($_SESSION['agenda'])) {
        ?>

        <form method="post">

            <input type="text" name="contacto" placeholder="Nombre del contacto">
            <button type="submit" name="guardar">Guardar</button>
            <button type="submit" name="leer">Leer</button>
            <button type="submit" name="cerrar">Cerrar Sesión</button>
        </form>

        <?php
    } else {
        // Si el usuario no ha iniciado sesión, se muestra el botón de iniciar sesión
        ?>

        <form method="post">
            <button type="submit" name="iniciar">Iniciar Sesión</button>
        </form>

        <?php
    }
    ?>

    <?php
    // Muestra los contactos si se ha presionado el botón de leer
    if (isset($_POST['leer']) && isset($_SESSION['agenda']) && count($_SESSION['agenda']) > 0) {

        // Titulillo
        echo '<h2>Contactos Guardados</h2>';

        // Lista
        echo '<ul>';

        foreach ($_SESSION['agenda'] as $contacto) {
            echo '<li>' . $contacto . '</li>';
        }
        echo '</ul>';
    }
    ?>

</body>

</html>