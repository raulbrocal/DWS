<html>

<head>
    <title>Categorias</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="contenedor">
        <div class="primera_caja">
            <h1 class="titulo">CATEGORIAS</h1>
        </div>
        <div class="segunda_caja">
            <ul>
                <?php
                $arrayCategorias = [];

                require('conexion.php');

                $consulta = "SELECT * FROM T_Categoria;";
                $resultado = mysqli_query($conexion, $consulta);
                if (!$resultado) {
                    $mensaje = 'Consulta inválida: ' . mysqli_error($conexion) . "\n";
                    $mensaje .= 'Consulta realizada: ' . $consulta;
                    die($mensaje);
                } else {
                    if (($resultado->num_rows) > 0) {

                        $contador = 0;
                        while ($registro = mysqli_fetch_assoc($resultado)) {

                ?>
                            <li>
                                <div class="categoria">
                                    <p><a href="peliculas.php?categoria=<?php echo $registro['estilo'] . "&id=" . $registro['categoria'] ?>"><?php echo $registro['genero'] ?></a></p>
                                </div>
                            </li>
                <?php }
                    } else {
                        echo "No hay resultados.";
                    }
                }
                ?>
            </ul>
        </div>
    </div>

</body>

</html>