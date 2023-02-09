<?php

require_once("DireccionIpAccesoDatos.php");

class DireccionIpReglasNegocio
{
    private $_ip;

    function __construct()
    {
    }

    function init($ip)
    {
        $this->_ip = $ip;
    }

    function getIp()
    {
        return $this->_ip;
    }

    function validarDigito($digito)
    {
        $longitud = strlen($digito);
        $result = true;
        for ($i = 0; $i < $longitud; $i++) {
            // print($digito[$i]);
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
            if (!$this->validarDigito($digito)) {
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
                $resultado = $resultado . $this->convertirNumeroBinarioDecimal($digito) . ".";
            } else {
                $resultado = $resultado . $this->convertirNumeroBinarioDecimal($digito);
            }
            $i++;
        }
        return $resultado;
    }


    function Limpiar()
    {
        $ipDAL = new DireccionIpAccesoDatos();
        $ips_a_validar = $ipDAL->obtenerDireccionesIp();
        $ips_bloqueadas = $ipDAL->obtenerDireccionesIpBloqueadas();
        foreach ($ips_a_validar as $ip_binario) {
            $ip_binario_a_validar = $ip_binario['direccion_ip_binario'];

            if ($this->validarIP($ip_binario_a_validar)) {
                $ip_decimal = $this->convertIP($ip_binario_a_validar);

                //ips bloqueadas, si en la DAL no lo retorna como array, no usaremos in_array
                //tendremos que iterarlo y hacer una búsqueda...
                $bloqueada = false;
                foreach ($ips_bloqueadas as $ip_bloqueada) {
                    if ($ip_decimal == $ip_bloqueada['direccion_ip_decimal']) {
                        $bloqueada = true;
                        break;
                    }
                }
                if (!$bloqueada) {
                    $ipDAL->insertar($ip_decimal);
                }
            }
        }
    }

    function obtenerDireccionesIpValidas()
    {
        $ipDAL = new DireccionIpAccesoDatos();
        $ips_a_validar = $ipDAL->obtenerDireccionesIpValidas();
        $listaIpsValidadas = array();

        foreach ($ips_a_validar as $ip_validada) {
            $oDireccionIpReglasNegocio = new DireccionIpReglasNegocio();
            $oDireccionIpReglasNegocio->Init($ip_validada['ip']);
            array_push($listaIpsValidadas, $oDireccionIpReglasNegocio);
        }

        return $listaIpsValidadas;
    }
}
