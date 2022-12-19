<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require('conexion.php');


$id_pelicula = $_POST['id_pelicula'];
$sanitized_pelicula_id = mysqli_real_escape_string(conexion(), $id_pelicula);
$consulta = "UPDATE T_Pelicula SET T_Pelicula.votos = T_Pelicula.votos + 1 WHERE id ='" . $sanitized_pelicula_id . "';";

$resultado = mysqli_query(conexion(), $consulta);

if (!$resultado) {
    $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consulta;
    die($mensaje);
} else { ?>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Cartelera</title>
        <link rel="stylesheet" href="css/voto.css" type="text/css" media="all">
    </head>

    <body>
        <div class="contenedor">
            <div class="primera_caja">
                <p class="link"><a href="categorias.php">Volver</a></p>
            </div>
            <div class="segunda_caja">
                <p class="texto">Todo ha salido correctamente.</p>
            </div>
        </div>
    </body>

    </html>
<?php }
