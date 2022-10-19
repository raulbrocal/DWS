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

    echo ($calculadora->factorial(5) . "<br>");

    echo ($calculadora->coeficienteBinomial(6, 2) . "<br>");

    echo ($calculadora->convierteBinarioDecimal("1000"));

    $arrayNumeros = [1,2,3,4,5,6,7,8,9,10];
    echo($calculadora->sumaNumerosPares($arrayNumeros) . "<br>");

    echo($calculadora->esPalindromo("casa") . "<br>");
    echo($calculadora->esPalindromo("casaasac") . "<br>");


    ?>
</body>

</html>