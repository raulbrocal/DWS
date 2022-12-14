<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

/*new class Ficha extends Pelicula{

};*/

$conexion = mysqli_connect('localhost', 'root', '12345', 'cartelera');

if (mysqli_connect_errno()) {
    echo "Error al conectarse a MySQL: " . mysqli_connect_errno();
}

$id_pelicula = $_GET['id_pelicula'];
$sanitized_pelicula_id = mysqli_real_escape_string($conexion, $id_pelicula);

$consulta = "SELECT * FROM T_Pelicula WHERE ID ='" . $sanitized_pelicula_id . "';";

$resultado = mysqli_query($conexion, $consulta);
if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
} else {
    if (($resultado->num_rows) > 0) {

        while ($registro = mysqli_fetch_assoc($resultado)) {
            $arrayPeliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos']);
        }
    } else {
        echo "No hay resultados.";
    }
}
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
                <div class="info"></div>
                <div class="imagen"></div>
                <div class="sinopsis">
                    <form action="ficha.php" method="post">
                        <input id="id_campo_1" name="nombre_campo_1" type="submit" value="Votar"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>