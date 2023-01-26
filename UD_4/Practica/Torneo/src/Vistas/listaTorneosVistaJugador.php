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
        <table class="torneos">
            <tr>
                <th>ID</th>
                <th>Nombre del torneo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Jugadores</th>
                <th>Campeón</th>
            </tr>
            <?php
            ini_set('display_errors', 'On');
            ini_set('html_errors', 0);

            require("../Negocio/torneosReglasNegocio.php");

            $torneosBL = new TorneosReglasNegocio();
            $datosTorneos = $torneosBL->listaTorneos();
            foreach ($datosTorneos as $torneo) {
                $id = $torneo->getID();
                echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $torneo->getNombreTorneo() . "</td>
                        <td>" . $torneo->getFecha() . "</td>
                        <td>" . $torneo->getEstado() . "</td>
                        <td>" . $torneo->getJugadores() . "</td>
                        <td>" . $torneo->getCampeon() . "</td>
                   </tr>";
            }
            ?>

        </table>
    </div>
</body>

</html>