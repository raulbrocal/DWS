DROP DATABASE IF EXISTS torneosTenisMesaDB;
CREATE DATABASE IF NOT EXISTS torneosTenisMesaDB;
USE torneosTenisMesaDB;

CREATE TABLE T_Jugador (
    jugadorId INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);
CREATE TABLE T_Usuario (
    usuario VARCHAR(255),
    clave VARCHAR(255),
    perfil ENUM('administrador', 'jugador') NOT NULL
);

CREATE TABLE T_Partido (
    partidoId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    jugadorA VARCHAR(50) DEFAULT NULL,
    jugadorB VARCHAR(50) DEFAULT NULL,
    ronda ENUM('cuartos', 'semifinal', 'final') NOT NULL,
    ganador ENUM('true', 'false') NOT NULL
);

CREATE TABLE T_Torneo (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreTorneo VARCHAR(50) DEFAULT NULL,
    fecha DATE,
    estado ENUM('No finalizado', 'En proceso', 'Finalizado') DEFAULT 'No finalizado',
    numJugadores INT DEFAULT 0,
    campeon ENUM('True', 'False') NOT NULL
);

INSERT INTO T_Torneo (nombreTorneo, numJugadores, fecha) VALUES ('Torne tenis mesa IES Son Ferrer', 8, '2020-03-25');