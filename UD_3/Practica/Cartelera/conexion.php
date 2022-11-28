<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
if (mysqli_connect_errno()) {
    echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
}
$consulta = "SELECT * FROM T_Pelicula;";
$resultado = mysqli_query($conexion, $consulta);
if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
} else {
    echo "conexión OK" . "<br>";
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo $registro['titulo'] . "<br>";
        echo $registro['duracion'] . "<br>";
    }
}
