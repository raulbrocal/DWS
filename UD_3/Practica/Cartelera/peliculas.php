<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php
    if (!empty($_GET["categoria"])) {
        $style = $_GET["categoria"];
    }
    if (empty($_GET["categoria"])) {
        $style = "style";
    }
    ?>
    <title>Cartelera</title>
    <link rel="stylesheet" href="css/<?php echo $style ?>.css" type="text/css" media="all">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">
            <ul>
                <li><a href="categorias.php">Volver</a></li>
            </ul>
        </div>
        <div class="segunda_caja">
            <h1><?php echo $style ?></h1>
            <div class="pelicula">
                <p class="titulo">Halloween: El final</p>
                <p class="votos">Votos:</p>
                <p class="puntos">10</p>
                <div class="imgs">
                    <img src="imgs/halloweenElFinal.jpg" alt="halloween">
                </div>
                <div class="sinopsis">
                    <h2>Sinopsis</h2>
                    <br>
                    <p>
                        Cuatro años después de los acontecimientos de Halloween Kills, Laurie vive con su nieta Allyson y está a punto de terminar de escribir sus memorias. Nadie ha vuelto a ver a Michael Myers desde entonces. Laurie, después de permitir que el espectro de Myers controlara su realidad durante décadas, ha decidido por fin dejar atrás el miedo y la rabia para dedicarse a vivir.

                        Pero cuando acusan a Corey Cunningham de matar al niño al que cuidaba, se desencadena una cascada de violencia que obligará a Laurie a enfrentarse de una vez por todas con una maldad que no puede controlar.
                    </p>
                </div>
                <br><br>
                <p class="duracion">Duración: </p>
                <p class="tiempo"></p>
                <p class="enlace">Enlace:</p>
            </div>
            <div class="pelicula">
                <p class="titulo">Halloween: El final</p>
                <p class="votos">Votos:</p>
                <p class="puntos">10</p>
                <div class="imgs">
                    <img src="imgs/halloweenElFinal.jpg" alt="halloween">
                </div>
                <div class="sinopsis">
                    <h2>Sinopsis</h2>
                    <br>
                    <p>
                        Cuatro años después de los acontecimientos de Halloween Kills, Laurie vive con su nieta Allyson y está a punto de terminar de escribir sus memorias. Nadie ha vuelto a ver a Michael Myers desde entonces. Laurie, después de permitir que el espectro de Myers controlara su realidad durante décadas, ha decidido por fin dejar atrás el miedo y la rabia para dedicarse a vivir.

                        Pero cuando acusan a Corey Cunningham de matar al niño al que cuidaba, se desencadena una cascada de violencia que obligará a Laurie a enfrentarse de una vez por todas con una maldad que no puede controlar.
                    </p>
                </div>
                <br><br>
                <p class="duracion">Duración: </p>
                <p class="tiempo"></p>
                <p class="enlace">Enlace:</p>
            </div>
            <div class="pelicula">
                <p class="titulo">Halloween: El final</p>
                <p class="votos">Votos:</p>
                <p class="puntos">10</p>
                <div class="imgs">
                    <img src="imgs/halloweenElFinal.jpg" alt="halloween">
                </div>
                <div class="sinopsis">
                    <h2>Sinopsis</h2>
                    <br>
                    <p>
                        Cuatro años después de los acontecimientos de Halloween Kills, Laurie vive con su nieta Allyson y está a punto de terminar de escribir sus memorias. Nadie ha vuelto a ver a Michael Myers desde entonces. Laurie, después de permitir que el espectro de Myers controlara su realidad durante décadas, ha decidido por fin dejar atrás el miedo y la rabia para dedicarse a vivir.

                        Pero cuando acusan a Corey Cunningham de matar al niño al que cuidaba, se desencadena una cascada de violencia que obligará a Laurie a enfrentarse de una vez por todas con una maldad que no puede controlar.
                    </p>
                </div>
                <br><br>
                <p class="duracion">Duración: </p>
                <p class="tiempo"></p>
                <p class="enlace">Enlace:</p>
            </div>
            <div class="pelicula">
                <p class="titulo">Halloween: El final</p>
                <p class="votos">Votos:</p>
                <p class="puntos">10</p>
                <div class="imgs">
                    <img src="imgs/halloweenElFinal.jpg" alt="halloween">
                </div>
                <div class="sinopsis">
                    <h2>Sinopsis</h2>
                    <br>
                    <p>
                        Cuatro años después de los acontecimientos de Halloween Kills, Laurie vive con su nieta Allyson y está a punto de terminar de escribir sus memorias. Nadie ha vuelto a ver a Michael Myers desde entonces. Laurie, después de permitir que el espectro de Myers controlara su realidad durante décadas, ha decidido por fin dejar atrás el miedo y la rabia para dedicarse a vivir.

                        Pero cuando acusan a Corey Cunningham de matar al niño al que cuidaba, se desencadena una cascada de violencia que obligará a Laurie a enfrentarse de una vez por todas con una maldad que no puede controlar.
                    </p>
                </div>
                <br><br>
                <p class="duracion">Duración: </p>
                <p class="tiempo"></p>
                <p class="enlace">Enlace:</p>
            </div>
            <div class="pelicula">
                <p class="titulo">Halloween: El final</p>
                <p class="votos">Votos:</p>
                <p class="puntos">10</p>
                <div class="imgs">
                    <img src="imgs/halloweenElFinal.jpg" alt="halloween">
                </div>
                <div class="sinopsis">
                    <h2>Sinopsis</h2>
                    <br>
                    <p>
                        Cuatro años después de los acontecimientos de Halloween Kills, Laurie vive con su nieta Allyson y está a punto de terminar de escribir sus memorias. Nadie ha vuelto a ver a Michael Myers desde entonces. Laurie, después de permitir que el espectro de Myers controlara su realidad durante décadas, ha decidido por fin dejar atrás el miedo y la rabia para dedicarse a vivir.

                        Pero cuando acusan a Corey Cunningham de matar al niño al que cuidaba, se desencadena una cascada de violencia que obligará a Laurie a enfrentarse de una vez por todas con una maldad que no puede controlar.
                    </p>
                </div>
                <br><br>
                <p class="duracion">Duración: </p>
                <p class="tiempo"></p>
                <p class="enlace">Enlace:</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

class Pelicula
{
    public $titulo;
    public $duracion;
    public $sinopsis;
    public $votos;
    public $enlace;

    function pintar()
    {
    }
}

$wakanda = new Pelicula();
$wakanda->titulo = "casa";
