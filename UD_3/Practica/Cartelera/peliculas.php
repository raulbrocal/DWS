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
                <li>Terror</li>
                <li>Ciencia Ficción</li>
            </ul>
        </div>
        <div class="segunda_caja">
            <div class="pelicula">
                <p class="titulo">TÍTULO</p>
                <p class="votos">Votos</p>
            </div>
            <div class="pelicula">
                <p>Adiós</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

class Pelicula
{
    public $titulo;
    public $duracion;
    public $sinopsis;
    public $votos;
    public $enlace;

    function pintar()
    {
    }
}

$wakanda = new Pelicula();
$wakanda->titulo = "casa";
