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

        <div class="clasificacion">

            <div class="ronda">
                <p>Cuartos</p>
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="octavos">
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
        </div>

    </div>
</body>

</html>