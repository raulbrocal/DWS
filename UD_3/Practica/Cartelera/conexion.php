<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

function conexion()
{
    $conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
    if (mysqli_connect_errno()) {
        echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
    }
}


function cargarCategorias()
{
    conexion();
    $consulta = "SELECT * FROM T_Categoria;";
    $resultado = mysqli_query($this->conexion, $consulta);
    if (!$resultado) {
        $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
        $mensaje .= 'Consulta realizada: ' . $consulta;
        die($mensaje);
    } else {
        if (($resultado->num_rows) > 0) {
            while ($registro = mysqli_fetch_assoc($resultado)) {
                $registro['estilo'];
                $registro['categoria'];
                $registro['genero'];
            }
        } else {
            echo "No hay resultados.";
        }
    }
}
