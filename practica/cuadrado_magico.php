<html>

<head>
    <title>Cuadrado Mágico</title>
    <link rel="stylesheet" href="estilos_cuadrado_magico.css">
</head>

<body>
    <div>
        <?php

        $matriz = [
            $array = [4, 9, 2],
            $array = [3, 5, 7],
            $array = [8, 1, 6]
        ];

        function pintarCuadradoMagico($matriz)
        {
            echo ("<table>");

            for ($i = 0; $i < 3; $i++) {
                echo ("<tr>");
                for ($j = 0; $j < 3; $j++) {
                    echo ("<td>" . $matriz[$i][$j] . "</td>");
                }
                echo ("</tr>");
            }

            echo ("</table>");
        }

        function analizarCuadradoMagico($matriz){

        }

        function analizarFilas($matriz){
            $suma = 0;

            for ($i=0; $i < count($matriz); $i++) {

                for ($j=0; $j < count($matriz); $j++) { 
                    $suma = $suma + $matriz[$i][$j];
                }

                if ($suma != 15) {
                    return "false";
                }

                $suma = 0;

            }

            return "true";
        }

        function analizarColumnas($matriz){
            $suma = 0;

            for ($i=0; $i < count($matriz); $i++) {

                for ($j=0; $j < count($matriz); $j++) { 
                    $suma = $suma + $matriz[$j][$i];
                }

                if ($suma != 15) {
                    return "false";
                }

                $suma = 0;

            }

            return "true";
        }

        echo(analizarFilas($matriz));
        echo(analizarColumnas($matriz));
        pintarCuadradoMagico($matriz);
        ?>
    </div>
</body>

</html>