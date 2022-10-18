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


    ?>
</body>

</html>