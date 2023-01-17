<?php

require("torneosAccesoDatos.php");

class TorneosReglasNegocio
{
    private $_ID;

    function __construct()
    {
    }

    function getID()
    {
        return $this->_ID;
    }

    function obtener()
    {
        $torneoDAL = new TorneosAccesoDatos();

        $listaTorneos = array();

        foreach ($torneoDAL as $torneo) {
            $oTorneosReglasNegocio = new TorneosReglasNegocio;
            $oTorneosReglasNegocio->obtener($torneo['ID']);
            array_push($listaTorneos, $oTorneosReglasNegocio);
        }

        return $listaTorneos;
    }
}
