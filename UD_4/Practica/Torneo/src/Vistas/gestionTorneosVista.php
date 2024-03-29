<?php
session_start(); // reanudamos la sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: loginVista.php");
}
if (isset($_POST['submit']) || isset($_GET['torneoId'])) {
    require_once("../Negocio/torneosReglasNegocio.php");
    $partidosBL = new PartidosReglasNegocio();

    if (isset($_POST['submit'])) {
        $torneosBL = new TorneosReglasNegocio();
        $torneosBL->insertarTorneo($_POST['fecha'], $_POST['nombre']);
        $partidosBL->crearPartidos('Cuartos');
        $torneoId = $torneosBL->ultimoId();
    } else {
        $torneoId = $_GET['torneoId'];
    }

    $datosPartidos = $partidosBL->datosPartidosTorneo($torneoId);

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
                <a href="listaTorneosVistaAdministrador.php"> Volver </a>
                <br>
                <a href="logoutVista.php"> Cerrar sesión </a>
                <br>
                <a href='resultadoPartidoVista.php?torneoId=<?php echo $_GET['torneoId']?>'>Nuevo partido</a>

                <p>Número de registros: <?php $nPartidos = $partidosBL->numPartidos($_GET['torneoId']);
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
                $enlace = $_SERVER['QUERY_STRING'];
                foreach ($datosPartidos as $partido) {
                    $ganador = $partido->getGanador();

                    if (is_int($ganador)) {
                        $ganador = $partido->obtenerNombreJugador($ganador);
                    }

                    $id = $partido->getID();
                    echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $partido->obtenerNombreJugador($partido->getJugadorA()) . "</td>
                        <td>" . $partido->obtenerNombreJugador($partido->getJugadorB()) . "</td>
                        <td>" . $partido->getRonda() . "</td>
                        <td>" . $ganador . "</td>
                        <td><a href='resultadoPartidoVista.php?torneoId=" . $torneoId . "&partidoId=" . $id . "'>Editar</a></td>
                        <td><a href='eliminarPartidoVista.php?torneoId=" . $torneoId . "&partidoId=" . $id . "'>Borrar</a></td>
                   </tr>";
                }
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
        <link rel="stylesheet" href="../../css/gestionTorneo.css">
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
<?php };
