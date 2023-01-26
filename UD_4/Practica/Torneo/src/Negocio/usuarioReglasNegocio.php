<?php

require("../Infraestructura/usuariosAccesoDatos.php");

class UsuarioReglasNegocio
{

    function __construct()
    {
    }

    function altaJugadores(){
        
    }

    function verificar($usuario, $clave)
    {
        $usuariosDAL = new UsuarioAccesoDatos();
        $res = $usuariosDAL->verificar($usuario, $clave);

        return $res;
    }
}
