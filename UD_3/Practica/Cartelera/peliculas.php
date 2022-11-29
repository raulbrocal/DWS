<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class Pelicula
{
    public $id;
    public $titulo;
    public $anyo;
    public $duracion;
    public $sinopsis;
    public $imagen;
    public $votos;
    public $director;
    public $actor;
    public $enlace;

    function __construct(
        $id,
        $titulo,
        $anyo,
        $duracion,
        $sinopsis,
        $imagen,
        $votos,
        $director,
        $actor,
        $enlace
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->anyo = $anyo;
        $this->duracion = $duracion;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;
        $this->votos = $votos;
        $this->director = $director;
        $this->actor = $actor;
        $this->enlace = $enlace;
    }

    function pintar()
    {
        echo $this->id . "<br>" . $this->titulo . "<br>";
    }
}

/*class Coleccion extends Pelicula
{
    public $arrayPeliculas;

    function rellenarDatos()
    {
        $conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
        if (mysqli_connect_errno()) {
            echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
        }
        $consulta = "SELECT * FROM T_Pelicula;";
        $resultado = mysqli_query($conexion, $consulta);
        if (!$resultado) {
            $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
            $mensaje .= 'Consulta realizada: ' . $consulta;
            die($mensaje);
        }

        $contador = 0;

        while ($registro = mysqli_fetch_assoc($resultado)) {

            $this->arrayPeliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos'], $registro['id_director'], $registro['id_actor'], $registro['ID']);

            $contador++;
        }
    }

    function pintar()
    {
        for ($i = 0; $i < count($this->arrayPeliculas); $i++) {
            for ($j = 0; $j < count($this->arrayPeliculas[$i]); $j++) {
                echo $this->arrayPeliculas[$i][$j];
            }
        }
    }

}*/

$arrayPeliculas = [];

$conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
if (mysqli_connect_errno()) {
    echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
}
$consulta = "SELECT * FROM T_Pelicula;";
$resultado = mysqli_query($conexion, $consulta);
if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
}

$contador = 0;

while ($registro = mysqli_fetch_assoc($resultado)) {

    $arrayPeliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos'], $registro['id_director'], $registro['id_actor'], $registro['ID']);

    $contador++;
}

for ($i = 0; $i < count($arrayPeliculas); $i++) {
    echo $arrayPeliculas[$i]->pintar();
}

?>

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
            <?php while ($i < $total) { ?>

            <?php }  ?>

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
<!--https://code.tutsplus.com/es/tutorials/how-to-use-php-in-html-code--cms-34378