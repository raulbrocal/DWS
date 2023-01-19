<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("../Infraestructura/torneosAccesoDatos.php");

class TorneosReglasNegocio
{
    private $_ID;
    private $_NombreTorneo;
    private $_Fecha;
    private $_Estado;
    private $_Jugadores;
    private $_Campeon;

    function __construct()
    {
    }

    function init($id, $nombre, $fecha, $estado, $jugadores, $campeon)
    {
        $this->_ID = $id;
        $this->_NombreTorneo = $nombre;
        $this->_Fecha = $fecha;
        $this->_Estado = $estado;
        $this->_Jugadores = $jugadores;
        $this->_Campeon = $campeon;
    }

    function getID()
    {
        return $this->_ID;
    }

    function getNombreTorneo()
    {
        return $this->_NombreTorneo;
    }

    function getFecha()
    {
        return $this->_Fecha;
    }

    function getEstado()
    {
        return $this->_Estado;
    }

    function getJugadores()
    {
        return $this->_Jugadores;
    }

    function getCampeon()
    {
        return $this->_Campeon;
    }

    function obtener()
    {
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtener();

        $listaTorneos =  array();

        foreach ($rs as $torneo) {
            $oTorneosReglasNegocio = new TorneosReglasNegocio();
            $oTorneosReglasNegocio->Init($torneo['ID'], $torneo['nombreTorneo'], $torneo['fecha'], $torneo['estado'], $torneo['numJugadores'], $torneo['campeon']);
            array_push($listaTorneos, $oTorneosReglasNegocio);
        }

        return $listaTorneos;
    }

    function numTorneos()
    {
        $oTorneosReglasNegocio = new TorneosAccesoDatos();
        $numTorneos = $oTorneosReglasNegocio->obtenerNumTorneos();
        return $numTorneos;
    }

    function borrar()
    {
        var_dump("casa");
    }
}
