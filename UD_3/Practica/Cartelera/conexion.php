<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

function conexion()
{
    $conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
    
    if (mysqli_connect_errno()) {
        return "Error al conectarse a MySQL: " . mysqli_connect_errno();
    } else {
        return $conexion;
    }
}