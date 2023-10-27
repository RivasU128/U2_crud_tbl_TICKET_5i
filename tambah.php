<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['registrar'])) {
    // recuperar datos del formulario
    $nom_empleado = $_POST['nom_empleado'];
    $telefono = $_POST['telefono'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $nom_producto = $_POST['nom_producto'];
    $correo_cliente = $_POST['correo_cliente'];
    $num_factura = $_POST['num_factura'];

    // Consulta
    $query = "INSERT INTO ticket(nom_empleado, telefono, precio, cantidad, nom_producto, correo_cliente, num_factura)
    VALUES('$nom_empleado', '$telefono', '$precio', '$cantidad', '$nom_producto', '$correo_cliente', '$num_factura')";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?resultado=exito');
    else
        header('Location: ./index.php?resultado=error');
} else
    die("Akses dilarang...");
