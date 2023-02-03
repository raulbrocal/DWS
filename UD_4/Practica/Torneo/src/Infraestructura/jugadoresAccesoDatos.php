<?php
class JugadoresAccesoDatos
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

    function listaJugadores()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT jugadorId FROM T_Jugador;");
        $consulta->execute();
        $result = $consulta->get_result();
        $listaJugadores = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($listaJugadores, $myrow);
        }
        return $listaJugadores;
    }

    function obtenerNombre($jugadorId)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT nombreCompleto FROM T_Jugador WHERE jugadorId = ?;");
        $consulta->bind_param("s", $jugadorId);
        $consulta->execute();
        $result = $consulta->get_result();
        $nombre = array();
        while ($myrow = $result->fetch_assoc()) {
            array_push($nombre, $myrow);
        }
        return implode($nombre[0]);
    }
}
