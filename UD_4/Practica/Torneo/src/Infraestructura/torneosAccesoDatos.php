<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class TorneosAccesoDatos
{
    function __construct()
    {
    }

    function conexion()
    {
        $conexion = mysqli_connect('localhost', 'root', '12345', 'torneosTenisMesaDB');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        return $conexion;
    }

    function obtener()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT ID, nombreTorneo, fecha, estado, numJugadores, campeon FROM T_Torneo");
        $consulta->execute();
        $result = $consulta->get_result();
        $torneos = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($torneos, $myrow);
        }
        return $torneos;
    }

    function obtenerNumTorneos()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT COUNT(*) FROM T_Torneo;");
        $consulta->execute();
        $result = $consulta->get_result();
        return $result;
    }
}
