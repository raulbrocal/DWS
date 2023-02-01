<?php
require("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();
$torneoId = $_GET['torneoId'];
$partidoId = $_GET['partidoId'];
$partidosBL->eliminarPartido($partidoId);
header("Location: gestionTorneosVista.php?torneoId=" . $torneoId . "");
