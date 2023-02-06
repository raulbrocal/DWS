<?php
function testValidarIPIncorrecta()
{
    $cadena_ip = "“12345678.11111111.00000001.10011111111111111010101”";

    return validarIP($cadena_ip);
}

function testValidarIPcorrecta()
{
    $cadena_ip = "11111111.11111111.11111111.00000001";

    return validarIP($cadena_ip);
}

function testConvertir()
{
    $cadena = "11111111.11111111.00000001.00001001";
    $res = convertIP($cadena);
    var_dump($res);
    return $res == "255.255.1.9";
}

function validarDigito($digito)
{
    $longitud = strlen($digito);
    $result = true;
    for ($i = 0; $i < $longitud; $i++) {
        print($digito[$i]);
        if ($digito[$i] != "0" && $digito[$i] != "1") {
            $result = false;
            break;
        }
    }
    return $result;
}

function validarIP($ip)
{
    $longitud = strlen($ip);
    if ($longitud != 35) {
        return false;
    }
    $result = true;
    $digitos = explode(".", $ip);
    foreach ($digitos as $digito) {
        if (!validarDigito($digito)) {
            $result = false;
            break;
        }
    }
    return $result;
}

function convertirNumeroBinarioDecimal($numero)
{
    $cadena = strrev($numero);
    $n = strlen($numero) - 1;

    $i = 0;
    $resultado = 0;
    for ($i = 0; $i <= $n; $i++) {
        $resultado = $resultado + ((2 ** $i) * $cadena[$i]);
    }

    return $resultado;
}

function convertIP($ipbinario)
{
    $digitos = explode(".", $ipbinario);
    $resultado = "";
    $i = 1;
    foreach ($digitos as $digito) {
        if ($i < 4) {
            $resultado = $resultado . convertirNumeroBinarioDecimal($digito) . ".";
        } else {
            $resultado = $resultado . convertirNumeroBinarioDecimal($digito);
        }
        $i++;
    }
    return $resultado;
}



var_dump(testValidarIPIncorrecta());
var_dump(testValidarIPcorrecta());

var_dump(testConvertir());
