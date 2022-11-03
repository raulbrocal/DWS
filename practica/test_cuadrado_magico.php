<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("cuadrado_magico.php");

function test_sumaPrimeraFila_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $x = $matriz1->sumaPrimeraFila($matriz);

    return ($x == 15);
}

function test_analizarFilas_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [4, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $matriz1->analizarFilas($matriz);
    $x = $matriz1->boolean;

    return ($x == "FALSE");
}

function test_analizarFilas_2()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $matriz1->analizarFilas($matriz);
    $x = $matriz1->boolean;

    return ($x == "FALSE");
}

function test_analizarColumnas_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [4, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $matriz1->analizarColumnas($matriz);
    $x = $matriz1->boolean;

    return ($x == "FALSE");
}

function test_analizarColumnas_2()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $matriz1->analizarColumnas($matriz);
    $x = $matriz1->boolean;

    return ($x == "FALSE");
}

function test_analizarDiagonalPrimera_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $x = $matriz1->analizarDiagonalPrimera($matriz);

    return ($x == "Primera Diagonal");
}

function test_analizarDiagonalPrimera_2()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 6, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $x = $matriz1->analizarDiagonalPrimera($matriz);

    return ($x == "Primera Diagonal");
}

function test_analizarDiagonalSegunda_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $x = $matriz1->analizarDiagonalSegunda($matriz);

    return ($x == "Segunda Diagonal");
}

function test_analizarDiagonalSegunda_2()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 6, 7],
        $array = [8, 1, 6]
    ]);

    $matriz1->analizarCuadradoMagico();
    $x = $matriz1->analizarDiagonalSegunda($matriz);

    return ($x == "Segunda Diagonal");
}

function test($testEjecutar)
{
    try {
        echo "<br>";
        $resultadoTest = $testEjecutar();
        $mensaje = 'El test: ' . $testEjecutar . ' ';
        $mensajeResultado = $resultadoTest ? 'OK' : 'KO';
        echo $mensaje . $mensajeResultado;
    } catch (Exception $e) {
        echo "<br>" . "Se ha producido una excepción al ejecutar:" . $testEjecutar . "<br>";
    }
}

function mostrar($objeto)
{

    $max_filas = count($objeto);

    for ($fila = 0; $fila < $max_filas; $fila++) {
        for ($columna = 0; $columna < $max_filas; $columna++) {
            echo "[" . $objeto[$fila][$columna] . "],";
        }
        echo "<br>";
    }
}

echo ("<br><br>TESTS UNITARIOS<br>");

echo "<br>Test sumaPrimeraFila";
test("test_sumaPrimeraFila_1");

echo "<br><br>Test analizarFilas";
test("test_analizarFilas_1");
test("test_analizarFilas_2");

echo "<br><br>Test analizarColumnas";
test("test_analizarColumnas_1");
test("test_analizarColumnas_2");

echo "<br><br>Test analizarDiagonalPrimera";
test("test_analizarDiagonalPrimera_1");
test("test_analizarDiagonalPrimera_2");

echo "<br><br>Test analizarDiagonalSegunda";
test("test_analizarDiagonalSegunda_1");
test("test_analizarDiagonalSegunda_2");
