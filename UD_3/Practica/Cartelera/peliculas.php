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
            <p>Menú</p>
        </div>
        <div class="segunda_caja">
            Estilo de película
        </div>
        <div class="tercera_caja"></div>
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
