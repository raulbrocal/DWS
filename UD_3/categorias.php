<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php
    if (!empty($_GET)) $style = $_GET;
    if (empty($_GET)) $style = "style";
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