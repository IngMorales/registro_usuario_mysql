<?php 
$nombre1 = mb_strtoupper($_POST['nombre1']);
$nombre2 = mb_strtoupper($_POST['nombre2']);
$apellido1 = mb_strtoupper($_POST['apellido1']);
$apellido2 = mb_strtoupper($_POST['apellido2']);
$documento = $_POST['documento'];

include "conexion.php";

$insertar = "INSERT INTO persona (nombre1, nombre2, apellido1, apellido2, documento) VALUES ('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$documento')";

if ($conexion -> query($insertar) == true) {
    header('location: ../registros.php');
}else{
    header('location: ../index.php');
}

$conexion -> close();
?>