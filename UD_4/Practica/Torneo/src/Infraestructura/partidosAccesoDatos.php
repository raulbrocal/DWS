<?php
class PartidosAccesoDatos
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

    function obtenerPartidosTorneo($torneoId)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT partidoId, jugadorA, jugadorB, ronda, ganador FROM T_Partido WHERE torneoId = ?;");
        $consulta->bind_param("s", $torneoId);
        $consulta->execute();
        $result = $consulta->get_result();
        $partidos = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($partidos, $myrow);
        }
        return $partidos;
    }

    function obtenerPartido($partidoId){
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT partidoId, ronda, jugadorA, jugadorB FROM T_Partido WHERE partidoId = ?;");
        $consulta->bind_param("s", $partidoId);
        $consulta->execute();
        $result = $consulta->get_result();
        $partido = array();
        while ($myrow = $result->fetch_assoc()) {
            $partido = $myrow;
        }
        return $partido;
    }

    function crearPartidos($ronda, $torneoId, $jugadorA, $jugadorB)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "INSERT INTO T_Partido (ronda,  torneoId, jugadorA, jugadorB) VALUES (?,?,?,?);");
        $consulta->bind_param("ssss", $ronda, $torneoId, $jugadorA, $jugadorB);
        $res = $consulta->execute();

        return $res;
    }

    function seleccionarGanador($partidoId, $jugadorId)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "UPDATE T_Partido SET ganador = ? WHERE partidoId = ?;)");
        $consulta->bind_param("ss", $partidoId, $jugadorId);
        $res = $consulta->execute();

        return $res;
    }

    function eliminarPartido($id)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "DELETE FROM T_Partido WHERE partidoId = ?;");
        $consulta->bind_param("s", $id);
        $res = $consulta->execute();

        return $res;
    }
}
