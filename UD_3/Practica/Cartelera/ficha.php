<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require('pelicula.php');
require('conexion.php');

$id_pelicula = $_GET['id_pelicula'];
$sanitized_pelicula_id = mysqli_real_escape_string(conexion(), $id_pelicula);

$consulta = "SELECT * FROM T_Pelicula WHERE ID ='" . $sanitized_pelicula_id . "';";
$consultaAutores = "SELECT aNombre FROM T_Actor_T_Pelicula INNER JOIN T_Actor ON actor = ID WHERE pelicula = '" . $sanitized_pelicula_id . "';";
$consultaDirectores = "SELECT dNombre FROM T_Director_T_Pelicula INNER JOIN T_Director ON director = ID WHERE pelicula = '" . $sanitized_pelicula_id . "';";

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

$resultadoActores = mysqli_query(conexion(), $consultaAutores);
if (!$resultadoActores) {
    $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consultaAutores;
    die($mensaje);
} else {
    if (($resultadoActores->num_rows) > 0) {
        $contador = 0;
        while ($registro = mysqli_fetch_assoc($resultadoActores)) {
            $actores[$contador] = $registro['aNombre'];
            $contador++;
        }
    } else {
        echo "No hay resultados.";
    }
}

$consultaDirectores = mysqli_query(conexion(), $consultaDirectores);
if (!$consultaDirectores) {
    $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
    $mensaje .= 'Consulta realizada: ' . $consultaAutores;
    die($mensaje);
} else {
    if (($consultaDirectores->num_rows) > 0) {
        $contador = 0;
        while ($registro = mysqli_fetch_assoc($consultaDirectores)) {
            $directores[$contador] = $registro['dNombre'];
            $contador++;
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
                <li><a href="categorias.php">Volver</a></li>
            </ul>
        </div>
        <div class="segunda_caja">
            <div class="ficha">
                <h1><?php echo $pelicula->titulo ?></h1>
                <div class="info">
                    <br>
                    <p>Año: <?php echo $pelicula->anyo ?></p>
                    <p>Duración: <?php echo $pelicula->duracion ?> min</p>
                    <p>Directores: <?php
                                    foreach ($directores as $value) {
                                        echo $value . " ";
                                    }
                                    ?></p>
                    <p>Actores: <?php
                                foreach ($actores as $value) {
                                    echo $value . " ";
                                }
                                ?></p><br>
                    <p>Sinopsis: <br><?php echo $pelicula->sinopsis ?></p>

                    <br>
                    <div class="votar">
                        ¿Quieres votar esta película como tu favorita?  
                        <form action="voto.php" method="POST">
                            <input id="id_pelicula" name="id_pelicula" type="hidden" value="<?php echo intval($pelicula->id) ?>"><br>
                            <input type="submit" value="Votar">
                        </form>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../Cartelera/imgs/<?php echo $pelicula->imagen ?>" alt="img">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>