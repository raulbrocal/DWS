<?php
session_start(); // reanudamos la sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: loginVista.php");
}
require("../Negocio/torneosReglasNegocio.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/listaTorneosVista.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Listado de torneos</title>
</head>

<body>
    <div class="contenedor">
        <h1>Listado de Torneos</h1>
        <?php echo "Bienvenido: " . $_SESSION['usuario']; ?>
        <br>
        <a href="logoutVista.php"> Cerrar sesión </a>
        <div class="informacion">
            <a href="gestionTorneosVista.php">Crear torneo</a>
            <p>Número de registros: <?php
                                    $torneosBL = new TorneosReglasNegocio();
                                    $nTorneos = $torneosBL->numTorneos();
                                    echo $nTorneos; ?></p>
        </div>
        <br>
        <table class="torneos">
            <tr>
                <th>ID</th>
                <th>Nombre del torneo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Jugadores</th>
                <th>Campeón</th>
                <th></th>
                <th></th>
            </tr>
            <?php

            $datosTorneos = $torneosBL->listaTorneos();

            foreach ($datosTorneos as $torneo) {
                $id = $torneo->getID();
                echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $torneo->getNombreTorneo() . "</td>
                        <td>" . $torneos->getFecha() . "</td>
                        <td>" . $torneos->getEstado() . "</td>
                        <td>" . $torneos->getJugadores() . "</td>
                        <td>" . $torneos->getCampeon() . "</td>
                        <td><a href='gestionTorneosVista.php?id=$id'>Editar</a></td>
                        <td><a href='#' onclick='torneosBL->borrar();'>Borrar</a></td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>