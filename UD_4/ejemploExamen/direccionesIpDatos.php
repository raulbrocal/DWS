<?php

class DireccionIpAccesoDatos
{

    function __construct()
    {
    }

    function obtenerDireccionesIp()
    {
        $conexion = mysqli_connect('localhost', 'root', '');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'ejemplos');
        $consulta = mysqli_prepare($conexion, "SELECT direccion_ip_binario FROM direcciones_ip ");
        $consulta->execute();
        $result = $consulta->get_result();
        return $result;
    }

    function obtenerDireccionesIpBloqueadas()
    {
        $conexion = mysqli_connect('localhost', 'root', '');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'ejemplos');
        $consulta = mysqli_prepare($conexion, "SELECT direccion_ip_decimal FROM direcciones_ip_bloqueadas ");
        $consulta->execute();
        $result = $consulta->get_result();
        return $result;
    }

    function obtenerDireccionesIpValidas()
    {
        $conexion = mysqli_connect('localhost', 'root', '');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'ejemplos');
        $consulta = mysqli_prepare($conexion, "SELECT ip FROM direcciones_ip_validas ");
        $consulta->execute();
        $result = $consulta->get_result();
        return $result;
    }

    function insertar($ip)
    {
        $conexion = mysqli_connect('localhost', 'root', '');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }

        mysqli_select_db($conexion, 'ejemplos');
        $consulta = mysqli_prepare($conexion, "insert into direcciones_ip_validas(ip) values (?);");
        //No saneamos porque las IPs vienen de un proceso interno, no de una entrada de usuario...        
        $consulta->bind_param("s", $ip);
        $res = $consulta->execute();

        return $res;
    }
}
