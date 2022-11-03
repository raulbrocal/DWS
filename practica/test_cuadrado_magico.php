<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

function test_sumaPrimeraFila_1()
{
    $matriz1 = new CuadradoMagico($matriz = [
        $array = [4, 9, 2],
        $array = [3, 5, 7],
        $array = [8, 1, 6]
    ]);
    
    $x = $matriz1->sumaPrimeraFila($matriz1);

    return ($x == 15);
}

// function test_factorial_2()
// {
//     $objeto = new CuadradoMagico();
//     $x = $objeto->factorial(4);
//     var_dump($x);
//     return $x == 24;
// }


// function test_factorial_3()
// {
//     $objeto = new CuadradoMagico();
//     var_dump($objeto->factorial(-1));
// }

// function test_coeficiente_binomial_1()
// {
//     $objeto = new CuadradoMagico();
//     $r = $objeto->coeficienteBinomial(6,4);

//     return ($r==15);
// }

// function test_coeficiente_binomial_2()
// {
//     try
//     {
//         $objeto = new CuadradoMagico();
//         $r = $objeto->coeficienteBinomial(4,4);
//     }
//     catch (Exception $e)
//     {
//          return $e->getMessage()=="Error n - k = 0";
//     }
// }

// function test_coeficiente_binomial_3()
// {
//     try
//     {
//         $objeto = new CuadradoMagico();
//         $r = $objeto->coeficienteBinomial(4,0);
//     }
//     catch (Exception $e)
//     {
//          return $e->getMessage()=="k=0";
//     }
// }


// function test_convierte_binario_decimal_1()
// {
//     $objeto = new CuadradoMagico();
//     $cad = "1001";
   
//     $r = $objeto->convierteBinarioDecimal($cad);
//     var_dump($r);

//     return ($r== bindec($cad));
// }

// function test_palindromo_1()
// {
//     $objeto = new CuadradoMagico();
//     $cad1 = "amor";
//     $cad2 = "roma";
   
//     $r = $objeto->esPalindromo($cad1,$cad2);
//     var_dump($r);

//     return $r;

// }

// function test_capicua_1()
// {
//     $objeto = new CuadradoMagico();
//     $cad1 = "oso";

//     $r = $objeto->esCapicua($cad1);
//     var_dump($r);

//     return $r;

// }

// function test_suma_matrices_cuadradas_1()
// {
//     $objeto = new CuadradoMagico();
//     $m1 = array(
//         array(2,3),
//         array(1,4)
//     );

//     $m2 = array(
//         array(1,0),
//         array(1,1)
//     );

//     $maux = $objeto->sumaMatricesCuadradas($m1,$m2);


//     mostrar($m1);
//     echo "+";
//     echo "<br>";
//     mostrar($m2);
//     echo "=";
//     echo "<br>";
//     mostrar($maux);

//     $mtest = array(
//         array(3,3),
//         array(2,5)
//     );

//     return $maux==$mtest;

// }

function test($testEjecutar)
{
    try 
    {
        echo "<br>";
        $resultadoTest = $testEjecutar();
        $mensaje = 'El test: '.$testEjecutar.' ';
        $mensajeResultado = $resultadoTest ? 'OK' : 'KO';
        echo $mensaje.$mensajeResultado;

    }
    catch(Exception $e)
    {
        echo "<br>"."Se ha producido una excepción al ejecutar:".$testEjecutar."<br>";

    } 
}

function mostrar($objeto)
{

    $max_filas = count($objeto);

    for ($fila = 0; $fila < $max_filas; $fila++)
    {
        for ($columna = 0; $columna < $max_filas; $columna++)
        {
            echo "[".$objeto[$fila][$columna]."],";
        }
        echo "<br>";
    }

}

echo "<br>Test sumaPrimeraFila<br>";
 test("test_sumaPrimeraFila_1");
//  test("test_factorial_2");
//  test("test_factorial_3");

// echo "<br>Test coeficiente binomial<br>";

// test("test_coeficiente_binomial_1");

// test("test_coeficiente_binomial_2");

// test("test_coeficiente_binomial_3");

// echo "<br>Test convierte binario a decimal<br>";

// test("test_convierte_binario_decimal_1");

// test("test_palindromo_1");

// test("test_capicua_1");

// test("test_suma_matrices_cuadradas_1");