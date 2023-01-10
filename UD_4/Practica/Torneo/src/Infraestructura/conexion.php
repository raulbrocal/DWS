<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$conexion = mysqli_connect('localhost', 'root', '12345', 'generadorTorneo');
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}
$id_categoria = 1;
$sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);
$consulta = mysqli_prepare($conexion, "SELECT * FROM T_Torneos WHERE ID = ?");
$consulta->bind_param("s", $sanitized_categoria_id);
$consulta->execute();

$result = $consulta->get_result();

while ($myrow = $result->fetch_assoc()) {
    echo $myrow['nombreTorneo'];
}