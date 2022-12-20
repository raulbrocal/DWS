<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("conexion.php");

function test_conexion_1()
{
    $x = conexion();

    return ($x == conexion());
}

function test_leerCategorias_1()
{
    require('categotias.php');

    $x = leerCategorias();

    return ($x == leerCategorias());
}

function test_pintarCategorias_1()
{
    require('categotias.php');

    $listaCategorias = leerCategorias();
    $x = pintarCategorias($listaCategorias);

    return ($x == pintarCategorias(leerCategorias()));
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

echo "<br>Test conexion()";
test("test_conexion_1");

echo "<br><br>Test leerCategorias";
test("test_leerCategorias_1");

echo "<br><br>Test pintarCategorias";
test("test_pintarCategorias_1");

echo "<br><br>Test analizarDiagonalPrimera";
test("test_analizarDiagonalPrimera_1");
test("test_analizarDiagonalPrimera_2");

echo "<br><br>Test analizarDiagonalSegunda";
test("test_analizarDiagonalSegunda_1");
test("test_analizarDiagonalSegunda_2");