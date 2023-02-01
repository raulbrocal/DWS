<?php
// $_GET torneoId partidoId
require_once("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();
if (isset($_POST['submit'])) {

    if ($_POST['ganador'] == 'null') {
        $partidosBL->crearPartidos($_POST['ronda']);
    } else {
        $partidosBL->seleccionarGanador($_GET['partidoId'], $jugadorId);
    }

    header("Location: gestionTorneosVista.php?torneoId=" . $_GET['torneoId'] . "");
} else {
    $listaJugadores = $partidosBL->listaJugadores();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>

    <body>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table>
                    <tr>
                        <td>Jugador A</td>
                        <td>Jugador B</td>
                        <td>Ronda</td>
                        <td>Ganador</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="jugadorA" id="id_jugadorA">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                                <option value="golang">Golang</option>
                            </select>
                        </td>
                        <td>
                            <select name="jugadorB" id="id_jugadorB">
                                <option value="javascript">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="java">Java</option>
                                <option value="golang">Golang</option>
                            </select>
                        </td>
                        <td>
                            <select name="ronda" id="id_ronda">
                                <option value="Cuartos">Cuartos</option>
                                <option value="Semifinal">Semifinal</option>
                                <option value="Final">Final</option>
                            </select>
                        </td>
                        <td>
                            <select name="ganador" id="id_ganador">
                                <option value="null">Pendiente</option>
                                <option value="jugadorA">jugadorA</option>
                                <option value="jugadorB">jugadorB</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Guardar" />
            </form>
        </main>
    </body>

    </html>

<?php };
