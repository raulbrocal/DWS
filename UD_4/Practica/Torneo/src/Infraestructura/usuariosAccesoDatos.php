<?php

class UsuarioAccesoDatos
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

    function insertar($usuario, $perfil, $clave)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "INSERT INTO T_Usuario (usuario, clave, perfil) VALUES (?,?,?);");
        $hash = password_hash($clave, PASSWORD_DEFAULT);
        $consulta->bind_param("sss", $usuario, $hash, $perfil);

        if (mysqli_errno($conexion) != 0) {
            $res = $consulta->execute();
        } else {
            echo $consulta->error;
        }

        return $res;
    }

    function verificar($usuario, $clave)
    {
        $conexion = $this->conexion();
        $consulta = mysqli_prepare($conexion, "SELECT usuario, clave, perfil FROM T_Usuario where usuario = ?;");
        $sanitized_usuario = mysqli_real_escape_string($conexion, $usuario);
        $consulta->bind_param("s", $sanitized_usuario);
        $consulta->execute();
        $res = $consulta->get_result();


        if ($res->num_rows == 0) {
            return 'NOT_FOUND';
        }

        if ($res->num_rows > 1) //El nombre de usuario debería ser único.
        {
            return 'NOT_FOUND';
        }

        $myrow = $res->fetch_assoc();
        $x = $myrow['clave'];
        if (password_verify($clave, $x)) {
            return $myrow['perfil'];
        } else {
            return 'NOT_FOUND';
        }
    }
}
