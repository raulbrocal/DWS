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
            <p class="titulo">Torneo de tenis de mesa.</p>
        </div>

        <div class="cuadroIzq">
            <div class="rondaIzq">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="octavos">
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
            <div class="rondaIzq">
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
            <div class="rondaIzq">
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
        </div>

        <div class="cuadroDer">
            <div class="rondaDer">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="octavos">
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
            <div class="rondaDer">
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
            <div class="rondaDer">
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
        </div>

        <div class="cuadroFinal">
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
</body>

</html>