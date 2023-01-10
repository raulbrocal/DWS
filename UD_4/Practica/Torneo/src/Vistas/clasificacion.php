<html lang="es">

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

        <div class="clasificaion">

            <div class="ronda">
                <p>Octavos</p>
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="octavos">
                        <table class="participantes">
                            <tr>
                                <th><input type="button" value="Local"></th>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <th>Visitante</th>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>

            <div class="ronda">
                <p>Cuartos</p>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="cuartos">
                        <table class="participantes">
                            <tr>
                                <th>Local</th>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <th>Visitante</th>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>

            <div class="ronda">
                <p>Semifinal</p>
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <div class="semi">
                        <table class="participantes">
                            <tr>
                                <th>Local</th>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <th>Visitante</th>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>

            <div class="ronda">
                <p>Ganador</p>
                <div class="final">
                    <table class="participantes">
                        <tr>
                            <th>Local</th>
                            <td>Score</td>
                        </tr>
                        <tr>
                            <th>Visitante</th>
                            <td>Score</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>