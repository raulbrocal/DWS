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

    function __construct(
        $id,
        $titulo,
        $anyo,
        $duracion,
        $sinopsis,
        $imagen,
        $votos
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->anyo = $anyo;
        $this->duracion = $duracion;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;
        $this->votos = $votos;
    }
}

$arrayPeliculas = [];

$conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');
if (mysqli_connect_errno()) {
    echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
}
$id_categoria = $_GET['id'];
$sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);
$consulta = "SELECT tp.*, tc.* FROM T_Pelicula tp INNER JOIN T_Categoria tc WHERE tp.categoriaId = tc.categoria AND categoriaId ='" . $sanitized_categoria_id . "'
ORDER BY votos DESC;";

$resultado = mysqli_query($conexion, $consulta);
if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
} else {
    if (($resultado->num_rows) > 0) {
        $contador = 0;

        while ($registro = mysqli_fetch_assoc($resultado)) {

            $arrayPeliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos']);

            $contador++;
        }
    } else {
        echo "No hay resultados.";
    }
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cartelera</title>
    <link rel="stylesheet" href="css/<?php echo $_GET["categoria"] ?>.css" type="text/css" media="all">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">
            <ul>
                <li><a href="categorias.php">Volver</a></li>
            </ul>
        </div>
        <div class="segunda_caja">
            <h1><?php echo $_GET["categoria"] ?></h1>
            <?php

            $total = count($arrayPeliculas);
            $i = 0;

            while ($i < $total) { ?>
                <div class="pelicula">
                    <p class="titulo"><?php echo $arrayPeliculas[$i]->titulo ?></p>
                    <p class="votos">Votos: <?php echo $arrayPeliculas[$i]->votos ?></p>
                    <div class="imgs">
                        <img src="imgs/<?php echo $arrayPeliculas[$i]->imagen ?>" alt="halloween">
                    </div>
                    <div class="sinopsis">
                        <h2>Sinopsis</h2>
                        <br>
                        <p><?php echo $arrayPeliculas[$i]->sinopsis ?></p>
                    </div>
                    <br><br>
                    <p class="duracion">Duración: <?php echo $arrayPeliculas[$i]->duracion ?></p>
                    <p><a href="ficha.php?id_pelicula=<?php echo $arrayPeliculas[$i]->id ?>">Ver Ficha</a></p>
                </div>
            <?php $i++;
            }  ?>
        </div>
    </div>
</body>

</html>
<!--https://code.tutsplus.com/es/tutorials/how-to-use-php-in-html-code--cms-34378