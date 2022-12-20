<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cartelera</title>
    <link rel="stylesheet" href="css/<?php
                                        $categoria = $_GET["categoria"];

                                        if (empty($categoria) || $categoria == 'null'  ) {
                                            throw new Exception('No existe ese tipo de categoria.');
                                        } else {
                                            echo $categoria;
                                        }

                                        ?>.css" type="text/css" media="all">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">
            <ul>
                <li><a href="categorias.php">Volver</a></li>
                <li><input type="submit" value="Votos Desc."></li>
                <li><input type="submit" value="Votos Asc."></li>
                <li><input type="submit" value="Título Desc."></li>
                <li><input type="submit" value="Título Asc."></li>
            </ul>
        </div>
        <div class="segunda_caja">
            <h1><?php echo $_GET["categoria"] ?></h1>
            <?php
            require('conexion.php');
            require('pelicula.php');

            pintar(leerPeliculas());
            ?>
        </div>
    </div>
</body>

</html>