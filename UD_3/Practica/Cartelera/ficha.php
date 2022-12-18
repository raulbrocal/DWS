<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require('pelicula.php');
require('conexion.php');

$id_pelicula = $_GET['id_pelicula'];
$sanitized_pelicula_id = mysqli_real_escape_string(conexion(), $id_pelicula);

$consulta = "SELECT * FROM T_Pelicula WHERE ID ='" . $sanitized_pelicula_id . "';";

$resultado = mysqli_query(conexion(), $consulta);
if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
} else {
    if (($resultado->num_rows) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)) {
            $pelicula = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos']);
        }
    } else {
        echo "No hay resultados.";
    }
}

$consulta = "SELECT pelicula, actor, aNombre FROM T_Actor_T_Pelicula INNER JOIN T_Actor ON actor = ID WHERE pelicula = '" . $sanitized_pelicula_id . "';";
$resultado = mysqli_query(conexion(), $consulta);

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Ficha</title>
    <link rel="stylesheet" href="css/ficha.css">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">
            <ul>
                <li><a href="peliculas.php?categoria=terror&id=1">Volver</a></li>
            </ul>
        </div>
        <div class="segunda_caja">
            <div class="ficha">
                <div class="info">
                    <h1><?php echo $pelicula->titulo ?></h1>
                    <br>
                    <p><?php echo $pelicula->anyo ?></p>
                    <p><?php echo $pelicula->duracion ?></p>
                    <p>Directores</p>
                    <p>Reparto</p>
                </div>
                <div class="imagen">
                    <img src="../Cartelera/imgs/<?php echo $pelicula->imagen ?>" alt="img">
                </div>
                <div class="sinopsis">
                    <p><?php echo $pelicula->sinopsis ?></p>

                    <form action="voto.php" method="POST">
                        <input id="id_pelicula" name="id_pelicula" type="hidden" value="<?php echo intval($pelicula->id) ?>"><br>
                        <input type="submit" value="Votar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>