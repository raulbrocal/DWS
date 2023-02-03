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
        $conexion = mysqli_connect('localhost', 'root', '1234', 'torneosTenisMesaDB');
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

    function obtenerIdUltimoTorneo()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT MAX(ID) FROM T_Torneo;");
        $consulta->execute();
        $result = $consulta->get_result();
        while ($myrow = $result->fetch_assoc()) {
            $partidoId = $myrow;
        }
        return implode($partidoId);
    }

    function insertarTorneo($fecha, $nombre)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "INSERT INTO T_Torneo (nombreTorneo, fecha, numJugadores) VALUES (?,?,8);");
        $consulta->bind_param("ss", $nombre, $fecha);
        $res = $consulta->execute();

        return $res;
    }

    function eliminarTorneo($id)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "DELETE FROM T_Torneo WHERE ID = ?;");
        $consulta->bind_param("s", $id);
        $res = $consulta->execute();

        return $res;
    }
}
