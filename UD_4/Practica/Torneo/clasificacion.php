<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/clasificacion.css">
    <title>Torneo</title>
</head>

<body>
    <div class="contenedor">
        <div class="menu">
            <p class="titulo">Este es el torneo de ping pong</p>
        </div>
        <div class="cuadroIzq"></div>
        <div class="cuadroDer">
            <div class="rondaDer">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="octavos">
                        <table class="participantes">
                            <tr>
                                <td>Local</td>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <td>Visitante</td>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
            <div class="rondaDer">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="cuartos">
                        <table class="participantes">
                            <tr>
                                <td>Local</td>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <td>Visitante</td>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
            <div class="rondaDer">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <div class="semi">
                        <table class="participantes">
                            <tr>
                                <td>Local</td>
                                <td>Score</td>
                            </tr>
                            <tr>
                                <td>Visitante</td>
                                <td>Score</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
            </div>
            <div class="rondaDer">
                <div class="final">
                    <table class="participantes">
                        <tr>
                            <td>Local</td>
                            <td>Score</td>
                        </tr>
                        <tr>
                            <td>Visitante</td>
                            <td>Score</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>