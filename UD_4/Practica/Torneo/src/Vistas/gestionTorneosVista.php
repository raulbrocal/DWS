<?php
require("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();
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
        <h1>Gestionador de Torneos</h1>
        <div class="informacion">
            <a href="resultadoPartidaVista.php">Nuevo partido</a>
            <p>Número de registros: <?php
                                    $nPartidos = $partidosBL->numPartidos();
                                    echo $nPartidos; ?></p>
        </div>
        <br>
        <table class="torneos">
            <tr>
                <th>ID</th>
                <th>Jugador A</th>
                <th>Jugador B</th>
                <th>Ronda</th>
                <th>Ganador</th>
                <th></th>
                <th></th>
            </tr>
            <?php

            $datosPartidos = $partidosBL->datosPartido();

            foreach ($datosPartidos as $partido) {
                echo "<tr>";
                echo "<td>";
                print($partido->getID());
                echo "</td>";
                echo "<td>";
                print($partido->getJugadorA());
                echo "</td>";
                echo "<td>";
                print($partido->getJugadorB());
                echo "</td>";
                echo "<td>";
                print($partido->getRonda());
                echo "</td>";
                echo "<td>";
                print($partido->getGanador());
                echo "</td>";
                echo "</tr>";
            }

            ?>
        </table>
    </div>
</body>

</html>