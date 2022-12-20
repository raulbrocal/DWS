<?php
class Categoria
{
    public $estilo;
    public $categoria;
    public $genero;

    function __construct(
        $estilo,
        $categoria,
        $genero
    ) {
        $this->estilo = $estilo;
        $this->categoria = $categoria;
        $this->genero = $genero;
    }
}

function leerCategorias()
{
    $listaCategorias = [];
    require('conexion.php');

    $consulta = "SELECT * FROM T_Categoria;";
    $resultado = mysqli_query(conexion(), $consulta);
    if (!$resultado) {
        $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
        $mensaje .= 'Consulta realizada: ' . $consulta;
        return($mensaje);
    } else {
        if (($resultado->num_rows) > 0) {
            $contador = 0;
            while ($registro = mysqli_fetch_assoc($resultado)) {
                $listaCategorias[$contador] = new Categoria($registro['estilo'], $registro['categoria'], $registro['genero']);
                $contador++;
            }
        } else {
            return "No hay resultados.";
        }
    }
    return $listaCategorias;
}

function pintarCategorias($listaCategorias)
{
    $total = count($listaCategorias);
    $i = 0;

    while ($i < $total) { ?>
        <li>
            <div class="categoria">
                <h2><a href="peliculas.php?categoria=<?php echo $listaCategorias[$i]->estilo . "&id_pelicula=" . $listaCategorias[$i]->categoria ?>"><?php echo $listaCategorias[$i]->genero ?></a></h2><br><img class='imagen' src="imgs/<?php echo $listaCategorias[$i]->estilo ?>.png" alt="Sin imagen disponible.">

            </div>
        </li>
<?php $i++;
    }
}

?>
<html>

<head>
    <title>Categorias</title>
    <link rel="stylesheet" href="css/categoria.css">
</head>

<body>

    <div class="contenedor">
        <div class="primera_caja">
            <h1 class="titulo">CATEGORIAS</h1>
        </div>
        <div class="segunda_caja">
            <ul>
                <?php
                pintarCategorias(leerCategorias());
                ?>
            </ul>
        </div>
    </div>

</body>

</html>