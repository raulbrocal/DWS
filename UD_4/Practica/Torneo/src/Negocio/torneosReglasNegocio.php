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
    private $_NumJugadores;
    private $_Campeon;


    function __construct()
    {
    }

    function init($id, $nombre, $fecha, $estado, $numJugadores, $campeon)
    {
        $this->_ID = $id;
        $this->_NombreTorneo = $nombre;
        $this->_Fecha = $fecha;
        $this->_Estado = $estado;
        $this->_NumJugadores = $numJugadores;
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
        return $this->_NumJugadores;
    }

    function getCampeon()
    {
        return $this->_Campeon;
    }

    function listaTorneos()
    {
        $torneosDAL = new TorneosAccesoDatos();
        $rs = $torneosDAL->obtenerTorneos();

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
        return implode($numTorneos);
    }

    function numPartidos()
    {
        $oTorneosReglasNegocio = new TorneosAccesoDatos();
        $numPartidos = $oTorneosReglasNegocio->obtenerNumPartidos();
        return implode($numPartidos);
    }

    function borrar()
    {
        var_dump("casa");
    }
}

class PartidosReglasNegocio
{
    private $_ID;
    private $_JugadorA;
    private $_JugadorB;
    private $_Ronda;
    private $_Ganador;


    function __construct()
    {
    }

    function getID()
    {
        return $this->_ID;
    }

    function getJugadorA()
    {
        return $this->_JugadorA;
    }

    function getJugadorB()
    {
        return $this->_JugadorB;
    }

    function getRonda()
    {
        return $this->_Ronda;
    }

    function getGanador()
    {
        return $this->_Ganador;
    }

    function init($id, $jugadorA, $jugadorB, $ronda, $ganador)
    {
        $this->_ID = $id;
        $this->_JugadorA = $jugadorA;
        $this->_JugadorB = $jugadorB;
        $this->_Ronda = $ronda;
        $this->_Ganador = $ganador;
    }

    function datosPartido()
    {
        $partidosDAL = new TorneosAccesoDatos();
        $rs = $partidosDAL->obtenerPartido();

        $datosPartido =  array();

        foreach ($rs as $torneo) {
            $oTorneosReglasNegocio = new PartidosReglasNegocio();
            $oTorneosReglasNegocio->Init($torneo['ID'], $torneo['nombreTorneo'], $torneo['fecha'], $torneo['estado'], $torneo['numJugadores'], $torneo['campeon']);
            array_push($datosPartido, $oTorneosReglasNegocio);
        }

        return $datosPartido;
    }
}
