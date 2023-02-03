<?php
require_once("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();

var_dump($_POST['partidoId']);

$partidosBL->seleccionarGanador(intval($_POST['ganador']), intval($_POST['partidoId']));

header("Location: " . $_POST['url'] . "");
