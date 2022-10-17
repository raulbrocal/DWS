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
                    <li><a href="./6_validar_get.php">7. Ejercicio clase</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                    $numero_entero = 5;
                    $numero_flotante = 6.5;
                    $cadena = "Hi!";

                    echo gettype($numero_entero)." ".$numero_entero . "<br>";
                    echo gettype($numero_flotante)." ".$numero_flotante . "<br>";
                    echo gettype($cadena)." ".$cadena . "<br>";

                    //PREGUNTA
                    //¿Qué otros tipos existen en PHP?
                    //Prueba por ejemplo el tipo booleano.
                    $x = 0;
                    $prueba_variable_no_inicializada = $numero_entero * $x;
                    echo $prueba_variable_no_inicializada;
                    //¿Que ha pasado?
                    //Cómo la variable $x
                ?>
            </div>
            <div class="tercera_columna">c</div>

        </div>
        <div class="tercera_caja">ccc</div>
    <div>
</body>
</html>