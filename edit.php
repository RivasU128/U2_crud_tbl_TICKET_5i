<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de editar o no
if (isset($_POST['editar_datos'])) {
    // recuperar datos del formulario
    $id_ticket = $_POST['id_ticket'];
    $nuevo_nom_empleado = $_POST['nuevo_nom_empleado'];
    $nuevo_telefono = $_POST['nuevo_telefono'];
    $nuevo_precio = $_POST['nuevo_precio'];
    $nuevo_cantidad = $_POST['nuevo_cantidad'];
    $nuevo_nom_producto = $_POST['nuevo_nom_producto'];
    $nuevo_correo_cliente = $_POST['nuevo_correo_cliente'];
    $nuevo_num_factura = $_POST['nuevo_num_factura'];


    // Consulta
    $query = "UPDATE ticket SET nom_empleado='$nuevo_nom_empleado', telefono='$nuevo_telefono', precio='$nuevo_precio', cantidad='$nuevo_cantidad', nom_producto='$nuevo_nom_producto', correo_cliente='$nuevo_correo_cliente', num_factura='$nuevo_num_factura' WHERE id_ticket = '$id_ticket'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?actualizar=exito');
    else
        header('Location: ./index.php?actualizar=error');
} else
    die("Acceso prohibido...");
