<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

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
        require_once("../Infraestructura/torneosAccesoDatos.php");
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

    function insertarTorneo($fecha, $nombre)
    {
        $oTorneosReglasNegocio = new TorneosAccesoDatos();
        $insertarTorneo = $oTorneosReglasNegocio->insertarTorneo($fecha, $nombre);
        return $insertarTorneo;
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
        require_once("../Infraestructura/partidosAccesoDatos.php");
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
        $partidosDAL = new PartidosAccesoDatos();
        $rs = $partidosDAL->obtenerPartidos();

        $datosPartido =  array();

        foreach ($rs as $torneos) {
            $oPartidosReglasNegocio = new PartidosReglasNegocio();
            $oPartidosReglasNegocio->Init($torneos['partidoId'], $torneos['jugadorA'], $torneos['jugadorB'], $torneos['ronda'], $torneos['ganador']);
            array_push($datosPartido, $oPartidosReglasNegocio);
        }

        return $datosPartido;
    }

    function numPartidos()
    {
        $oPartidosReglasNegocio = new PartidosAccesoDatos();
        $numPartidos = $oPartidosReglasNegocio->obtenerNumPartidos();
        return implode($numPartidos);
    }

    function insertarPartido($ronda)
    {
        require_once("../Infraestructura/jugadoresAccesoDatos.php");
        require_once("../Infraestructura/torneosAccesoDatos.php");

        $torneosDAL = new TorneosAccesoDatos();
        $idTorneo = $torneosDAL->obtenerIdUltimoTorneo();

        $jugadoresDAL = new JugadoresAccesoDatos();
        $listaJugadores = $jugadoresDAL->listaJugadores();

        $oPartidosReglasNegocio = new PartidosAccesoDatos();

        $jugadorA = 0;
        $jugadorB = 0;
        $contador = 1;

        for ($i = 0; $i < count($listaJugadores); $i++) {
            if ($contador == 1) {
                $jugadorA = implode($listaJugadores[$i]);
                $contador++;
            } else {
                $jugadorB = implode($listaJugadores[$i]);
                $oPartidosReglasNegocio->crearPartido($ronda, $idTorneo, $jugadorA, $jugadorB);
                $contador = 1;
            }
        }
    }
}