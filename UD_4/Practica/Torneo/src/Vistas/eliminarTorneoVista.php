<?php
require("../Negocio/torneosReglasNegocio.php");
$partidosBL = new TorneosReglasNegocio();
$partidosBL->eliminarTorneo($_GET['torneoId']);
header("Location: listaTorneosVistaAdministrador.php");
