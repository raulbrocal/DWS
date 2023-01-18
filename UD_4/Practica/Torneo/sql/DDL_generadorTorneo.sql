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
    nombreTorneo VARCHAR(100) DEFAULT NULL,
    fecha DATE NULL,
    estado ENUM('No finalizado', 'Finalizado') DEFAULT 'No finalizado',
    numJugadores INT DEFAULT 0,
    campeon VARCHAR(100) DEFAULT NULL
);

INSERT INTO T_Torneo (nombreTorneo, fecha, estado, numJugadores, campeon) VALUES 
('Torneo IES Son Ferrer','2023-03-25', 'No finalizado', '8', 'Jugador 1');
INSERT INTO T_Torneo (nombreTorneo, estado, numJugadores, campeon) VALUES 
('Torneo 2021', 'Finalizado', '8', 'Carlos Sogorb');
INSERT INTO T_Torneo (nombreTorneo, fecha, estado, numJugadores, campeon) VALUES 
('Torneo navidad 2022','2022-12-22', 'Finalizado', '8', 'Carlos Acedo');
