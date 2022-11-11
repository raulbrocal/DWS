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
                    <li><a href="./Ejercicio1/calculadora_usuario.php">Calculadora</a></li>
                    <li><a href="./cancion.php">Canción</a></li>
                    <li><a href="./10_ejerExamen.php">Ejercicio exámen</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                class Frecuencia{
                    public $cadena;

                    function __construct($cadena)
                    {
                        $this->cadena = strtoupper($cadena) ;
                    }

                    function analizarFrecuenciaLetras(){

                        $letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
                        $contador = [];
                        $suma = 0;

                        for ($i=0; $i < count($letras); $i++) { 
                            for ($j=0; $j < strlen($this->cadena); $j++) { 
                                if ($this->cadena[$j] == $letras[$i]) {
                                    $suma++;
                                }
                            }
                            $contador[$i] = $suma;
                            $suma = 0;
                        }

                        return $contador;

                    }

                    function obtenerPalabras(){
                        $contador = 0;
                        $array = explode($this->cadena, " ");
                        $arrayResultado = [];

                        // for ($i=0; $i < count($array); $i++) { 
                        //     if (in_array($array[$i]), $arrayResultado) {
                        //         $arrayResultado[$contador] = $array[$i];
                        //         $contador++;
                        //     }
                        // }
                        
                        return $arrayResultado;
                    }
                }
                $frase = new Frecuencia("La casa es blanca y la noche es gris");
                $letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
                foreach ($letras as $value) {
                    echo $value." ";
                }
                echo "<br>";
                foreach ($frase->analizarFrecuenciaLetras() as $value) {
                    echo $value."-";
                }
                ?>
            </div>
            <div class="tercera_columna">c</div>

        </div>
        <div class="tercera_caja">ccc</div>
        <div>
</body>

</html>