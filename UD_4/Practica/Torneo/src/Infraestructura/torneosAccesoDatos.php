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

    function obtenerTorneos()
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
        $consulta = mysqli_prepare($conexion, "SELECT COUNT(ID) FROM T_Torneo;");
        $consulta->execute();
        $result = $consulta->get_result();
        $torneos = array();
        while ($myrow = $result->fetch_assoc()) {
            $torneos = $myrow;
        }
        return $torneos;
    }

    function obtenerNumPartidos()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT COUNT(partidoId) FROM T_Partido;");
        $consulta->execute();
        $result = $consulta->get_result();
        $partidos = array();
        while ($myrow = $result->fetch_assoc()) {
            $partidos = $myrow;
        }
        return $partidos;
    }

    function obtenerPartidos()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT ID, jugadorA, jugadorB, ronda, ganador FROM T_Torneo INNER JOIN T_Torneo_T_Partido ON ID = torneo INNER JOIN T_Partido ON partidoId = partido;");
        $consulta->execute();
        var_dump($consulta);
        $result = $consulta->get_result();
        $partidos = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($partidos, $myrow);
        }
        return $partidos;
    }
}
