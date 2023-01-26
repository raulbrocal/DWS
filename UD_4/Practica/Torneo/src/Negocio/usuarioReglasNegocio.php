<?php

require("../Infraestructura/usuariosAccesoDatos.php");

class UsuarioReglasNegocio
{

    function __construct()
    {
        $this->altaJugadores();
    }

    function altaJugadores()
    {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->insertar('raul', 'administrador', '1234');
        return $res;
    }

    function verificar($usuario, $clave)
    {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->verificar($usuario, $clave);

        return $res;
    }
}
