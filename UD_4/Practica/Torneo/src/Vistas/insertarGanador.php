<?php
require_once("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();

$partidosBL->seleccionarGanador(intval($_POST['ganador']), intval($_POST['partidoId']));

header("Location: " . $_POST['url'] . "");
