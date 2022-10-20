<html>

<head>
    <title>Ejercicio</title>
</head>

<body>
    <?php

    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    require("calculadora.php");

    $calculadora = new Calculadora();

    echo ("FACTORIAL<br>" . $calculadora->factorial(5) . "<br><br>");

    echo ("CALCULAR BINOMIAL<br>" . $calculadora->coeficienteBinomial(10, 2) . "<br><br>");

    echo ("CONVERSOR BINARIO A DECIMAL<br>" . $calculadora->convierteBinarioDecimal("1000") . "<br><br>");

    $arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo ("SUMA NÚMEROS PARES<br>" . $calculadora->sumaNumerosPares($arrayNumeros) . "<br><br>");

    echo ("EJERCICIO CAPICUA<br>".$calculadora->esPalindromo("casa") . "<br>");
    echo ($calculadora->esPalindromo("casaasac") . "<br>");

    echo ("<br>");

    $matriz1 = array(
        array(4, 0, 2),
        array(6, 7, 9),
        array(1, 2, 2)
    );

    $matriz2 = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    $result = $calculadora->sumaMatrices($matriz1, $matriz2);
    
    for ($i=0; $i < count($result); $i++) { 
        for ($j=0; $j < count($result); $j++) { 
            echo($result[$i][$j]." ");
        }
        echo("<br>");
    }

    ?>
</body>

</html>