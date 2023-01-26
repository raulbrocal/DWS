<?php

require("src/Infraestructura/usuariosAccesoDatos.php");

function test_alta_administrador()
{
    $u = new UsuarioAccesoDatos();
    return $u->insertar('raul','administrador','1234');
}

function test_verificar_administrador_encontrado()
{
    $perfil_esperado = 'administrador';
    $u = new UsuarioAccesoDatos();
    $perfil = $u->verificar('raul','1234');
    return $perfil === $perfil_esperado;
}


var_dump(test_alta_administrador());
var_dump(test_verificar_administrador_encontrado());

function insertarJugadores(){
    $jugador = new UsuarioAccesoDatos();
    $jugador->insertar('javi', 'jugador', '1234');
    $jugador->insertar('sergio', 'jugador', '1234');
    $jugador->insertar('okolo', 'jugador', '1234');
    $jugador->insertar('yeray', 'jugador', '1234');
    $jugador->insertar('stewart', 'jugador', '1234');
    $jugador->insertar('castillo', 'jugador', '1234');
    $jugador->insertar('fernando', 'jugador', '1234');
    $jugador->insertar('jaume', 'jugador', '1234');
}

insertarJugadores();