<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de torneos</title>
</head>

<body>
    <h1>Listado de torneos</h1>
    <?php
    require("torneosReglasNegocio.php");

    $torneosBL = new TorneosReglasNegocio();
    $datosTorneos = $torneosBL->obtener();

    foreach ($datosTorneos as $torneo) {
        echo "<div>";
        print($torneo->getID());
        echo "</div>";
    }
    ?>
</body>

</html>