<?php

require("src/Infraestructura/usuariosAccesoDatos.php");

function test_alta_administrador()
{
    $u = new UsuarioAccesoDatos();
    return $u->insertar('raul','administrador','12345678');
}

function test_verificar_administrador_encontrado()
{
    $perfil_esperado = 'administrador';
    $u = new UsuarioAccesoDatos();
    $perfil = $u->verificar('raul','12345678');
    return $perfil === $perfil_esperado;
}


var_dump(test_alta_administrador());
var_dump(test_verificar_administrador_encontrado());

function insertarJugadores(){
    $jugador = new UsuarioAccesoDatos();
    $jugador->insertar('javi', 'jugador', '12345678');
    $jugador->insertar('sergio', 'jugador', '12345678');
    $jugador->insertar('okolo', 'jugador', '12345678');
    $jugador->insertar('yeray', 'jugador', '12345678');
    $jugador->insertar('stewart', 'jugador', '12345678');
    $jugador->insertar('castillo', 'jugador', '12345678');
    $jugador->insertar('fernando', 'jugador', '12345678');
    $jugador->insertar('jaume', 'jugador', '12345678');
}

insertarJugadores();