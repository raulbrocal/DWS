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
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                function obtenerParametro($parametro)
                {
                    $result = "";
                    if (!empty($_GET[$parametro]))
                        $result = $_GET[$parametro];

                    return $result;
                }
                ?>


                <?php
                ini_set('display_errors', 'On');
                ini_set('html_errors', 0);

                $variable_letra = obtenerParametro("letra");

                if ($variable_letra == "") {
                    echo "Parámetro vacio";
                } else {
                    require("funciones_y_condiciones.php");

                    $mensaje = 'La letra: ' . $variable_letra . ' ';
                    // if else:
                    $mensaje_es_vocal = esVocal($variable_letra) ? 'es una vocal' : 'no es una vocal';
                    echo $mensaje . $mensaje_es_vocal;
                }
                ?>
            </div>
            <div class="tercera_columna">c</div>

        </div>
        <div class="tercera_caja">ccc</div>
        <div>
</body>

</html>