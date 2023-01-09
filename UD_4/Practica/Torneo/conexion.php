<?php
$conexion = mysqli_connect('localhost', 'root', '12345', 'generadorTorneo');
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
}
$id_categoria = $_POST['id_categoria'];
$sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);
$consulta = mysqli_prepare($conexion, "SELECT * FROM  WHERE id_categoria = ?");
$consulta->bind_param("s", $sanitized_categoria_id);
$consulta->execute();

$result = $consulta->get_result();

while ($myrow = $result->fetch_assoc()) {
    echo $myrow['titulo'];
}