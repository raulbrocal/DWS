<?php
class PartidosAccesoDatos
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
        $result = $consulta->get_result();
        $partidos = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($partidos, $myrow);
        }
        return $partidos;
    }

    function crearPartido($ronda, $jugadorA, $jugadorB)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "INSERT INTO T_Partido (ronda, jugadorA, jugadorB) VALUES (?,?,?);");
        $consulta->bind_param("sss", $ronda, $jugadorA, $jugadorB);
        $res = $consulta->execute();

        return $res;
    }
}
