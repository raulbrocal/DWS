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
    public $directores;
    public $reparto;

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

function leerPeliculas()
{
    $arrayPeliculas = [];

    $id_categoria = $_GET['id_pelicula'];
    $sanitized_categoria_id = mysqli_real_escape_string(conexion(), $id_categoria);
    $consulta = "SELECT tp.*, tc.* FROM T_Pelicula tp INNER JOIN T_Categoria tc WHERE tp.categoriaId = tc.categoria AND categoriaId ='" . $sanitized_categoria_id . "';";

    $resultado = mysqli_query(conexion(), $consulta);
    if (!$resultado) {
        $mensaje = 'Consulta inválida: ' . mysqli_error(conexion()) . "\n";
        $mensaje .= 'Consulta realizada: ' . $consulta;
        return ($mensaje);
    } else {
        if (($resultado->num_rows) > 0) {
            $contador = 0;

            while ($registro = mysqli_fetch_assoc($resultado)) {

                $arrayPeliculas[$contador] = new Pelicula($registro['ID'], $registro['titulo'], $registro['anyo'], $registro['duracion'], $registro['sinopsis'], $registro['imagen'], $registro['votos']);

                $contador++;
            }
        } else {
            return "No hay resultados.";
        }
    }

    return $arrayPeliculas;
}

function pintar($arrayPeliculas)
{
    $total = count($arrayPeliculas);
    $i = 0;

    while ($i < $total) { ?>
        <div class="pelicula">
            <p class="titulo"><?php echo $arrayPeliculas[$i]->titulo ?></p>
            <p class="votos">Votos: <?php echo $arrayPeliculas[$i]->votos ?></p>
            <div class="imgs">
                <img src="imgs/<?php echo $arrayPeliculas[$i]->imagen ?>" alt="imagen">
            </div>
            <div class="sinopsis">
                <h2>Sinopsis</h2>
                <br>
                <p><?php $cadena = $arrayPeliculas[$i]->sinopsis;
                    $caracteres = 250;
                    echo substr($cadena, 0, $caracteres) . '...';
                    ?></p>
            </div>
            <br><br>
            <p class="duracion">Duración: <?php echo $arrayPeliculas[$i]->duracion ?> min</p>
            <p><a href="ficha.php?id_pelicula=<?php echo $arrayPeliculas[$i]->id ?>">Ver Ficha</a></p>
        </div>
<?php $i++;
    }
}
