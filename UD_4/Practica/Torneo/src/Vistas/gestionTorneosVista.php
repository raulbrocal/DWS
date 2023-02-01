<?php
if (isset($_POST['submit'])) {
    require("../Negocio/torneosReglasNegocio.php");
    $partidosBL = new PartidosReglasNegocio();


    $torneosBL = new TorneosReglasNegocio();
    $torneosBL->insertarTorneo($_POST['fecha'], $_POST['nombre']);

    $partidosBL->insertarPartido('Cuartos');

    $datosPartidos = $partidosBL->datosPartido();
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
                <a href="resultadoPartidoVista.php">Nuevo partido</a>
                <p>Número de registros: <?php $nPartidos = $partidosBL->numPartidos();
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

                foreach ($datosPartidos as $partido) {
                    $id = $partido->getID();
                    echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $partido->getJugadorA() . "</td>
                        <td>" . $partido->getJugadorB() . "</td>
                        <td>" . $partido->getRonda() . "</td>
                        <td>" . $partido->getGanador() . "</td>
                        <td><a href='resultadoPartidoVista.php'>Editar</a></td>
                        <td><a href='#' onclick='torneosBL->borrar();'>Borrar</a></td>
                   </tr>";
                }
                ?>

                ?>
            </table>
        </div>
    </body>

    </html>

<?php } else { ?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear torneo</title>
    </head>

    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha">
            <input type="submit" name="submit" value="Crear torneo">
        </form>
    </body>

    </html>

<?php } ?>