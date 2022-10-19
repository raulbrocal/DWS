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
            echo "El valor de x ha de ser >= 0.";
        }
    }

    function coeficienteBinomial($n, $k)
    {
        return $this->factorial($n) / $this->factorial($k) * $this->factorial($n - $k);
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

        echo ($decimal . "<br>");
        // echo (bindec($cadenaBits));

    }
}
