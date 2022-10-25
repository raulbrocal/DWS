<html>
<head>
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos.css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <a href="index.php">INICIO</a>
            <a href="pagina1.html">Primera página</a>
            <a href="pagina2.html">Segunda página</a>
        </div>
        <div class="segunda_caja">

            <div class="primera_columna">
                <ul>
                    <li><b>EJERCICIOS</b></li>
                    <li><a href="./0_hola_mundo.php">1. Hola mundo</a></li>
                    <li><a href="./1_hola_mundo_comentarios.php">2. Hola mundo comentarios</a></li>
                    <li><a href="./2_variables_y_tipos.php">3. Variables y tipos</a></li>
                    <li><a href="./3_arrays_bucles.php">4. Arrays y bucles</a></li>
                    <li><a href="./4_constantes.php">5. Constantes</a></li>
                    <li><a href="./5.variables_super_globales.php">6. Variables super globales</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                    $personas = ["Carlos", "Oscar", "Jose"];
                ?>
                <ul>
                    <?php
                        foreach ($personas as $persona)
                        {
                            echo "<li>$persona</li>";
                        }

                        //TODO: Modifica el código para que también se muestre el
                        for ($i = 1; $i <= 10; $i++) {
                            echo $i;
                        }
                        echo "<br>";

                        $i = 1;
                        while ($i <= 10) {
                            echo $i++;
                        }
                        echo "<br>";

                        $i = 1;
                        while ($i <= sizeof($personas)) {
                            echo $i++;
                        }
                    ?>
                </ul>
            </div>
            <div class="tercera_columna">c</div>

        </div>
        <div class="tercera_caja">ccc</div>
    <div>
</body>
</html>

