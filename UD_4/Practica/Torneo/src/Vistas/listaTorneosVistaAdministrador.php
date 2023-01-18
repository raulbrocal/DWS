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
            ini_set('display_errors', 'On');
            ini_set('html_errors', 0);

            require("../Negocio/torneosReglasNegocio.php");

            $torneosBL = new TorneosReglasNegocio();
            $datosTorneos = $torneosBL->obtener();

            foreach ($datosTorneos as $torneo) {
                echo "<tr>";
                echo "<td>";
                print($torneo->getID());
                echo "</td>";
                echo "<td>";
                print($torneo->getNombreTorneo());
                echo "</td>";
                echo "<td>";
                print($torneo->getFecha());
                echo "</td>";
                echo "<td>";
                print($torneo->getEstado());
                echo "</td>";
                echo "<td>";
                print($torneo->getJugadores());
                echo "</td>";
                echo "<td>";
                print($torneo->getCampeon());
                echo "</td>";
                echo "<td>";
                echo "<a href='gestionTorneosVista.php'>Editar</a>";
                echo "</td>";
                echo "<td>";
                echo "<a href='#' onclick='torneosBL->borrar();'>Borrar</a>";
                echo "</td>";
            }
            ?>
        </table>
    </div>
</body>

</html>