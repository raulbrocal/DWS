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

        class CuadradoMagico extends Analizar
        {
            public $boolean = "TRUE";
            public $arrayList;
            public $matriz;

            function __construct($matriz)
            {
                $this->matriz = $matriz;
            }

            function pintar()
            {
                $this->pintarMatriz($this->matriz);

                if ($this->boolean == "TRUE") {
                    echo ("ES UN CUADRADO MÁGICO");
                } else {
                    echo ("<font color='red'>NO ES UN CUADRADO MÁGICO</font><br>");
                    echo ("<br>Respecto a la suma de la primera fila que es " . $this->arrayList[0] . "," . "<br>");

                    echo ("<br>Las filas diferentes a " . $this->arrayList[0] . " son" . "<br>");

                    for ($i = 0; $i < count($this->arrayList[1]); $i++) {
                        echo ("<br>Fila " . ($this->arrayList[1][$i] + 1) . "<br>");
                    }

                    echo ("<br>Las columnas diferentes a " . $this->arrayList[0] . " son" . "<br>");

                    for ($i = 0; $i < count($this->arrayList[2]); $i++) {
                        echo ("<br>Columna " . ($this->arrayList[2][$i] + 1) . "<br>");
                    }

                    if (!empty($this->arrayList[3]) || !empty($this->arrayList[4])) {
                        echo ("<br>Las dia diferentes a " . $this->arrayList[0] . " son" . "<br><br>");

                        if (!empty($this->arrayList[3])) {
                            echo ($this->arrayList[3]) . "<br>";
                        }
                        if (!empty($this->arrayList[4])) {
                            echo ($this->arrayList[4]) . "<br>";
                        }
                    }
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

        class Analizar
        {
            function analizarCuadradoMagico()
            {
                $this->sumaPrimeraFila($this->matriz);
                $this->analizarFilas($this->matriz);
                $this->analizarColumnas($this->matriz);
                $this->analizarDiagonalPrimera($this->matriz);
                $this->analizarDiagonalSegunda($this->matriz);
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
                $suma = 0;

                $j = count($matriz) - 1;
                for ($i = 0; $i < count($matriz); $i++) {
                    $suma = $suma + $matriz[$i][$j];
                    $j--;
                }

                if ($suma != $this->arrayList[0]) {
                    $this->arrayList[4] = "Segunda Diagonal";
                    $this->boolean = "FALSE";
                }

                $suma = 0;
            }
        };

        $objeto1 = new CuadradoMagico($matriz = [
            $array = [4, 9, 2],
            $array = [3, 5, 7],
            $array = [8, 1, 6]
        ]);

        $objeto2 = new CuadradoMagico($matriz = [
            $array = [4, 14, 15, 1],
            $array = [9, 7, 6, 12],
            $array = [5, 11, 10, 8],
            $array = [16, 2, 3, 13]
        ]);

        $objeto1->analizarCuadradoMagico();
        $objeto1->pintar();

        $objeto2->analizarCuadradoMagico();
        $objeto2->pintar();

        ?>
    </div>
</body>

</html>