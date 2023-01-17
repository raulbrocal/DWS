<?php

class TorneosAccesoDatos
{
    function __construct()
    {
    }

    function obtener()
    {
        $conexion = mysqli_connect('localhost', 'root', '12345', 'torneosTenisMesaDB');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        $consulta = mysqli_prepare($conexion, "SELECT ID FROM T_Torneo");
        $consulta->execute();
        $result = $consulta->get_result();
        $torneos = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($torneos, $myrow);
        }
        return $torneos;
    }
}
