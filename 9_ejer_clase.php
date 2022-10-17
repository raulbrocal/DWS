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
                    <li><a href="./5_variables_super_globales.php">6. Variables super globales</a></li>
                    <li><a href="./6_validar_get.php">7. Ejercicio clase</a></li>
                    <li><a href="./7_try_catch.php">8. Ejercicio 2 clase</a></li>
                    <li><a href="./8_informacion.php">9. Ejercicio 3 clase</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                $matriz = array(
                    array(4, 0, 2),
                    array(6, 7, 9),
                    array(1, 2, 2)
                );

                $max_filas = count($matriz);

                for ($fila = 0; $fila < $max_filas; $fila++) {
                    echo "<p><b>Fila numero $fila</b></p>";
                    $max_columnas_fila = count($matriz[$fila]);
                    for ($columna = 0; $columna < $max_columnas_fila; $columna++) {
                        echo "[" . $matriz[$fila][$columna] . "],";
                    }
                }
                function find_position($number)
                {
                    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8);
                    $posnum = 0;

                    foreach ($numeros as $key => $val) {

                        $posicion = array_search($val, $numeros);

                        $posnum++;
                    }
                }

                function posFirst($vector, $numero)
                {
                    $i = 0;
                    $encontrado = False;
                    $posicion = -1;

                    while ($i < count($vector) && $encontrado == False) {
                        if ($vector[$i] == $numero) {
                        }
                    }
                }

                $numeros = [6, 7, 7, 0];

                $resultado = posFirst($numeros, 7);
                if ($resultado != 1) {
                    echo $resultado;
                } else {
                    echo "No se ha encontrado el número.";
                }

                ?>

                <?php
                $a = 0.0;
                // True because $a is empty
                if (empty($a)) {
                    echo "La variable 'a' está empty.<br>";
                }
                // True because $a is set
                if (isset($a)) {
                    echo "La variable 'a' tiene asignado un valor.";
                }
                ?>

                <?php
                $a = "0.0";
                // True because $a is empty
                if (empty($a)) {
                    echo "La variable 'a' está empty.<br>";
                }
                // True because $a is set
                if (isset($a)) {
                    echo "La variable 'a' tiene asignado un valor.";
                }
                ?>

                <?php
                $a = "0.0";
                // True because $a is empty
                if (empty(floatval($a))) {
                    echo "La variable 'a' está empty.<br>";
                }
                // True because $a is set
                if (isset($a)) {
                    echo "La variable 'a' tiene asignado un valor.";
                }
                ?>

                // Un objeto clase calculadora, una de ellas factorial, matrices, tratamiento de cadenas, canción (pones una frase y te escribe la frase cambiando las vocales).

            </div>
            <div class="tercera_columna">c</div>

        </div>
        <div class="tercera_caja">ccc</div>
        <div>
</body>

</html>