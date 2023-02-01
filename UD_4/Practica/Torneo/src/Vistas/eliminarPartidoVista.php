<?php
require("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();
$partidosBL->eliminarPartido($_GET['partidoId']);
header("Location: listaTorneosVistaAdministrador.php");
