<html>

<head>
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
</head>

<body>
    <div>
        <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        class CuadradoMagico
        {
            public $boolean = "TRUE";
            public $arrayList;
            public $matriz;

            function __construct($matriz)
            {
                $this->matriz = $matriz;
            }

            function analizarCuadradoMagico()
            {
                $this->sumaPrimeraFila($this->matriz);
                $this->analizarFilas($this->matriz);
                $this->analizarColumnas($this->matriz);
                $this->analizarDiagonalPrimera($this->matriz);
            }

            function sumaPrimeraFila($matriz)
            {

                $sumaColumna = 0;

                for ($i = 0; $i < count($matriz[0]); $i++) {
                    $sumaColumna = $sumaColumna + $matriz[0][$i];
                }

                $this->arrayList[0] = $sumaColumna;
            }

            function analizarFilas($matriz)
            {
                $suma = 0;
                $posicion = 0;

                for ($i = 0; $i < count($matriz); $i++) {

                    for ($j = 0; $j < count($matriz); $j++) {

                        $suma = $suma + $matriz[$i][$j];
                    }

                    if ($suma != $this->arrayList[0]) {
                        $this->arrayList[1][$posicion] = $i;
                        $this->boolean = "FALSE";
                        $posicion++;
                    }

                    $suma = 0;
                }
            }

            function analizarColumnas($matriz)
            {
                $suma = 0;
                $posicion = 0;

                for ($i = 0; $i < count($matriz); $i++) {

                    for ($j = 0; $j < count($matriz); $j++) {
                        $suma = $suma + $matriz[$j][$i];
                    }

                    if ($suma != $this->arrayList[0]) {
                        $this->arrayList[2][$posicion] = $i;
                        $this->boolean = "FALSE";
                        $posicion++;
                    }

                    $suma = 0;
                }
            }

            function analizarDiagonalPrimera($matriz)
            {
                $suma = 0;

                for ($i = 0; $i < count($matriz); $i++) {
                    $suma = $suma + $matriz[$i][$i];
                }
                
                

                if ($suma != $this->arrayList[0]) {
                    $this->arrayList[3] = "Primera Diagonal";
                    $this->boolean = "FALSE";
                }

                $suma = 0;
            }

            function analizarDiagonalSegunda($matriz)
            {
                $posicion = 0;
                $suma = 0;

                for ($i = count($matriz); $i >= 0; $i--) {
                    $suma = $suma + $matriz[$i][$i];
                }

                if ($suma != 15) {
                    return "false";
                }

                $suma = 0;
            }

            function pintar()
            {
                $this->pintarMatriz($this->matriz);

                if ($this->boolean == "TRUE") {
                    echo ("ES UN CUADRADO MÁGICO");
                } else {
                    echo ("NO ES UN CUADRADO MÁGICO<br>");
                    echo ("<br>Respecto a la suma de la primera fila que es " . $this->arrayList[0] . "," . "<br>");

                    echo ("<br>Las filas diferentes a " . $this->arrayList[0] . " son" . "<br>");

                    for ($i = 0; $i < count($this->arrayList[1]); $i++) {
                        echo ("<br>Fila " . ($this->arrayList[1][$i] + 1) . "<br>");
                    }

                    echo ("<br>Las columnas diferentes a " . $this->arrayList[0] . " son" . "<br>");

                    for ($i = 0; $i < count($this->arrayList[2]); $i++) {
                        echo ("<br>Columna " . ($this->arrayList[2][$i] + 1) . "<br>");
                    }

                    echo ("<br>Las dia diferentes a " . $this->arrayList[0] . " son" . "<br><br>");

                    echo ($this->arrayList[3]) . "<br>";

                    echo ($this->arrayList[4]) . "<br>";

                }

                echo ("<br>");

            }

            function pintarMatriz($matriz)
            {
                echo ("<table>");

                for ($i = 0; $i < count($matriz); $i++) {
                    echo ("<tr>");
                    for ($j = 0; $j < count($matriz); $j++) {
                        echo ("<td>" . $matriz[$i][$j] . "</td>");
                    }
                    echo ("</tr>");
                }

                echo ("</table>");
            }
        };

        $objeto = new CuadradoMagico($matriz = [
            $array = [4, 9, 2],
            $array = [3, 6, 7],
            $array = [8, 2, 6]
        ]);

        $objeto->analizarCuadradoMagico();
        $objeto->pintar();

        ?>
    </div>
</body>

</html>