<?php
require("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();
$datosPartidos = $partidosBL->datosPartidosTorneo($_GET['torneoId']);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/clasificacion.css">
    <title>Torneo</title>
</head>

<body>
    <div class="contenedor">

        <div class="menu">
            <p class="titulo">Torneo de tenis de mesa.</p>
        </div>

        <div class="clasificacion">

            <div class="ronda">
                <p>Cuartos</p>
                <?php foreach ($datosPartidos as $partido) {
                    echo "<div class='octavos'>
                        <table class='participantes'>
                            <tr>
                                <td><input class='local' type='button' value=" . $partido->obtenerNombreJugador($partido->getJugadorA()) . "></td>
                            </tr>
                            <tr>
                                <td><input class='visitante' type='button' value=" . $partido->obtenerNombreJugador($partido->getJugadorB()) . "></td>
                            </tr>
                        </table>
                    </div>";
                } ?>
            </div>

        </div>
</body>

</html>

<!-- <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de torneos</title>
</head>

<body>
    <h1>Listado de torneos</h1>
    <?php
    require("../Negocio/torneosReglasNegocio.php");

    $torneosBL = new TorneosReglasNegocio();
    $datosTorneos = $torneosBL->listaTorneos();

    foreach ($datosTorneos as $torneo) {
        echo "<div>";
        print($torneo->getID());
        echo "</div>";
    }
    ?>
</body>

</html>

<div class="ronda">
                <p>Semifinal</p>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="cuartos">
                        <table class="participantes">
                            <tr>
                                <td><input class="local" type="button" value="Local"></td>
                            </tr>
                            <tr>
                                <td><input class="visitante" type="button" value="Visitante"></td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>

            <div class="ronda">
                <p>Final</p>
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <div class="semi">
                        <table class="participantes">
                            <tr>
                                <td><input type="button" value="Jugador"></td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>

            <div class="ronda">
                <p>Campeón</p>
                <div class="final">
                    <div class="participantes">
                        <input value="Jugador"></td>
                    </div>
                </div>
            </div>
        </div> -->