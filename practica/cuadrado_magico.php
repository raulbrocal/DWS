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

        pintarCuadradoMagico($matriz);
        ?>
    </div>
</body>

</html>