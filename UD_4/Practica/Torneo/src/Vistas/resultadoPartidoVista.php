<?php
session_start(); // reanudamos la sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: loginVista.php");
}

// $_GET torneoId partidoId 697508000
require_once("../Negocio/torneosReglasNegocio.php");
$partidosBL = new PartidosReglasNegocio();

if (isset($_POST['submit'])) {
    if (!empty(($_POST['ganador']))) {
        $partidosBL->seleccionarGanador($_GET['partidoId'], $_POST['ganador']);
    } else {
        $partidosBL->crearPartidos($_POST['ronda']);
    }
    header("Location: gestionTorneosVista.php?torneoId=" . $_GET['torneoId'] . "");
} elseif (isset($_GET['partidoId'])) {
    $partido = $partidosBL->obtenerPartido($_GET['partidoId']);
    $jugadorA = $partidosBL->obtenerNombreJugador($partido['jugadorA']);
    $jugadorB = $partidosBL->obtenerNombreJugador($partido['jugadorB']);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="../../css/resultadoPartidoVista.css">
    </head>

    <body>
        <a href="listaTorneosVistaAdministrador.php"> Volver </a>
        <br>
        <a href="logoutVista.php"> Cerrar sesión </a>
        <h1>SELECCIONA UN GANADOR</h1>
        <form action="insertarGanador.php" method="POST">
            <table>
                <tr>
                    <td>Jugador A</td>
                    <td>Jugador B</td>
                    <td>Ronda</td>
                    <td><label for='id_ganador'>Ganador</label></td>
                </tr>
                <tr>
                    <td>
                        <?php print($jugadorA) ?>
                    </td>
                    <td>
                        <?php print($jugadorB) ?>
                    </td>
                    <td>
                        <?php print($partido['ronda']) ?>
                    </td>
                    <td>
                        <select name='ganador' id='id_ganador'>
                            <option value='<?php print($partido['jugadorA']) ?>'><?php print($jugadorA) ?></option>
                            <option value='<?php print($partido['jugadorB']) ?>'><?php print($jugadorB) ?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="hidden" name="url" value="gestionTorneosVista.php?torneoId=<?php print($_GET['torneoId']) ?>">
                        <input type="hidden" name="partidoId" value="<?php print($partido['partidoId']) ?>">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </body>

    </html>
<?php } else {
    $listaJugadores = $partidosBL->listaJugadores();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="../../css/resultadoPartidoVista.css">
    </head>

    <body>
        <form action="añadirPartido.php?torneoId=<?php print($_GET['torneoId']); ?>" method="POST">
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
                            <?php
                            for ($i = 0; $i < count($listaJugadores); $i++) {
                                $nombreJugador = $partidosBL->obtenerNombreJugador(implode($listaJugadores[$i]));
                                $jugadorId = implode($listaJugadores[$i]);
                                echo "<option value=" . $jugadorId . ">" . $nombreJugador . "<option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="jugadorB" id="id_jugadorB">
                            <?php
                            for ($i = 0; $i < count($listaJugadores); $i++) {
                                $nombreJugador = $partidosBL->obtenerNombreJugador(implode($listaJugadores[$i]));
                                $jugadorId = implode($listaJugadores[$i]);
                                echo "<option value=" . $jugadorId . ">" . $nombreJugador . "<option>";
                            }
                            ?>
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
            <input type="submit" value="Enviar">
        </form>
    </body>

    </html>

<?php };
