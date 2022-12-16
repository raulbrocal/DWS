<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
class Pelicula
{
    public $id;
    public $titulo;
    public $anyo;
    public $duracion;
    public $sinopsis;
    public $imagen;
    public $votos;
    public $directores;
    public $reparto;

    function __construct(
        $id,
        $titulo,
        $anyo,
        $duracion,
        $sinopsis,
        $imagen,
        $votos
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->anyo = $anyo;
        $this->duracion = $duracion;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;
        $this->votos = $votos;
    }
}
