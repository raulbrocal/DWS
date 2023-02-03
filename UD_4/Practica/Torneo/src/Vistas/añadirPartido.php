<?php
require_once("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();

$partidosBL->insertarPartido($_POST['ronda'], $_GET['torneoId'], $_POST['jugadorA'], $_POST['jugadorB']);

header("Location: gestionTorneosVista.php?torneoId=" . $_GET['torneoId'] . "");
