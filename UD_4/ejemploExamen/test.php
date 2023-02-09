<?php

require_once("./DireccionIpAccesoDatos.php");

function test_obtener_ips()
{
    $u = new DireccionIpAccesoDatos();
    return $u->obtenerDireccionesIp();
}

function test_obtener_ips_bloqueadas()
{
    $u = new DireccionIpAccesoDatos();
    return $u->obtenerDireccionesIpBloqueadas();
}

require_once("./DireccionIpReglasNegocio.php");

function test_limpiar()
{
    $limpieza = new DireccionIpReglasNegocio();
    $limpieza->Limpiar();
}


test_limpiar();

// Acceso + Vista 40% y Negocio 60%.
// Nos dará un modelo de datos e interpretar relaciones.
// Revisar ejercicios o prácticas (num aleatorios no salen)