<?php
include("./config.php");

if (isset($_POST['Borrar_datos'])) {
    // Agarrar el id del registro que se va a borrar
    $id_ticket = $_POST['id_borrado'];

    // Consulta de borrado
    $query = "DELETE FROM ticket WHERE id_ticket = '$id_ticket'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Se eliminó correctamente la consulta?
    if ($resultado) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("acceso prohibido...");
