<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombre_base_de_datos = "ferreteria";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $nombre_base_de_datos);

if (!$conexion)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
