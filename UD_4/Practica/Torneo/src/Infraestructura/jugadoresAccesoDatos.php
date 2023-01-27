<?php
class JugadoresAccesoDatos
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

    function listaJugadores()
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT COUNT(jugadorId) FROM T_Jugador;");
        $consulta->execute();
        $result = $consulta->get_result();
        $listaJugadores = array();
        while ($myrow = $result->fetch_assoc()) {
            $listaJugadores = $myrow;
        }
        shuffle($listaJugadores);
        return $listaJugadores;
    }
}
