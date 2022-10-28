<html>

<head>
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
</head>

<body>
    <div>
        <?php

        class CuadradoMagico
        {
            public $boolean;
            public $array;
            public $matriz;

            function __construct($matriz)
            {
                $this->matriz = $matriz;
            }

            function analizarCuadradoMagico()
            {
                $this->sumaPrimeraFila($this->matriz);
            }

            function sumaPrimeraFila($matriz)
            {
    
                $sumaColumna = 0;
    
                for ($i = 0; $i < count($matriz[0][$i]); $i++) {
                    $sumaColumna = $sumaColumna + $matriz[0][$i];
                }
    
                return $sumaColumna;

            }

        };

        $objeto = new CuadradoMagico($matriz = [
            $array = [4, 9, 2],
            $array = [3, 5, 7],
            $array = [8, 1, 6]
        ]);

        echo($objeto->analizarCuadradoMagico());

        // $matriz = [
        //     $array = [4, 9, 2],
        //     $array = [3, 5, 7],
        //     $array = [8, 1, 6]
        // ];

        // function pintarCuadradoMagico($objeto)
        // {
        //     pintarMatriz($objeto);
        //     analizarCuadradoMagico($objeto);
        // };

        // function pintarMatriz($matriz)
        // {
        //     echo ("<table>");

        //     for ($i = 0; $i < count($matriz->getMatriz()); $i++) {
        //         echo ("<tr>");
        //         for ($j = 0; $j < count($matriz->getMatriz()); $j++) {
        //             echo ("<td>" . $matriz->getMatriz()[$i][$j] . "</td>");
        //         }
        //         echo ("</tr>");
        //     }

        //     echo ("</table>");
        // }

        // function analizarCuadradoMagico($matriz)
        // {
        //     sumaPrimeraFila($matriz);
        // };

        // function sumaPrimeraFila($matriz)
        // {

        //     $sumaColumna = 0;

        //     for ($i = 0; $i < count($matriz->getMatriz()[0][$i]); $i++) {
        //         $sumaColumna = $sumaColumna + $matriz->getMatriz()[0][$i];
        //     }

        //     return "Respecto a la suma de la primera fila que es " . $sumaColumna;
        // }

        // function analizarFilas($matriz)
        // {
        //     $suma = 0;

        //     for ($i = 0; $i < count($matriz); $i++) {

        //         for ($j = 0; $j < count($matriz); $j++) {
        //             $suma = $suma + $matriz[$i][$j];
        //         }

        //         if ($suma != 15) {
        //             return "false";
        //         }

        //         $suma = 0;
        //     }

        //     return "true";
        // }

        // function analizarColumnas($matriz)
        // {
        //     $suma = 0;

        //     for ($i = 0; $i < count($matriz); $i++) {

        //         for ($j = 0; $j < count($matriz); $j++) {
        //             $suma = $suma + $matriz[$j][$i];
        //         }

        //         if ($suma != 15) {
        //             return "false";
        //         }

        //         $suma = 0;
        //     }

        //     return "true";
        // }

        // function analizarDiagonalPrimera($matriz)
        // {

        //     $suma = 0;

        //     for ($i = count($matriz); $i >= 0; $i--) {
        //         $suma = $suma + $matriz[$i][$i];
        //     }

        //     if ($suma != 15) {
        //         return "false";
        //     }

        //     $suma = 0;

        //     return "true";
        // }

        // function analizarDiagonalSegunda($matriz)
        // {

        //     $suma = 0;

        //     for ($i = 0; $i < count($matriz); $i++) {
        //         $suma = $suma + $matriz[$i][$i];
        //     }

        //     if ($suma != 15) {
        //         return "false";
        //     }

        //     $suma = 0;

        //     return "true";
        // }


        // echo (analizarFilas($matriz));
        // echo (analizarColumnas($matriz));
        // echo (analizarDiagonalPrimera($matriz));
        // echo (analizarDiagonalSegunda($matriz));
        // pintarCuadradoMagico($cuadradoMagico);

        ?>
    </div>
</body>

</html>