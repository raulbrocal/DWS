<?php
class Calculadora
{
    function factorial($x)
    {
        if ($x == 0) {
            return 1;
        } elseif ($x > 0) {
            $result = 1;
            while ($x >= 0) {
                $result = $result * $x;
                $x = $x - 1;

                if ($x == 0) {
                    return $result;
                }
            }
        } else {
            echo "El valor de la variable ha de ser numérica y mayor o igual a 0.";
        }
    }

    function coeficienteBinomial($n, $k)
    {

        if ($n < $k) {
            echo ("El valor del primer número ha de ser mayor que el segundo.");
            return;
        }

        return $this->factorial($n) / ($this->factorial($k) * $this->factorial($n - $k));
    }

    function convierteBinarioDecimal($cadenaBits)
    {

        $array = array_reverse(str_split($cadenaBits));
        $exponente = 0;
        $decimal = 0;

        foreach ($array as $value) {

            $decimal = $decimal + $value * pow(2, $exponente);

            $exponente++;
        }

        return $decimal;
        // echo (bindec($cadenaBits));
    }

    function sumaNumerosPares($array)
    {

        $suma = 0;

        foreach ($array as $value) {

            if ($value % 2 == 0) {
                $suma = $suma + $value;
            }
        }

        return $suma;
    }



    function esPalindromo($cadena)
    {
        $cadenaDesordenada = array_reverse(str_split($cadena));
        $cadenaOrdenada = str_split($cadena);

        // echo("<br>");
        // print_r($cadenaOrdenada);
        // echo("<br>");
        // print_r($cadenaDesordenada);
        // echo("<br>");

        $esCapicua = true;

        for ($i = 0; $i < count($cadenaOrdenada); $i++) {

            if ($cadenaOrdenada[$i] != $cadenaDesordenada[$i]) {
                $esCapicua = false;
                break;
            }
        }

        if ($esCapicua) {
            return "True";
        } else {
            return "False";
        }
    }

    function sumaMatrices($primeraMatriz, $segundaMatriz)
    {

        $matrizResultado = [];
        for ($i = 0; $i < count($primeraMatriz); $i++) {
            for ($j = 0; $j < count($primeraMatriz); $j++) {
                $matrizResultado[$i][$j] = $primeraMatriz[$i][$j] + $segundaMatriz[$i][$j];
            }
        }

        return $matrizResultado;
    }
}
