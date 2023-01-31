DROP DATABASE IF EXISTS torneosTenisMesaDB;
CREATE DATABASE IF NOT EXISTS torneosTenisMesaDB;
USE torneosTenisMesaDB;

CREATE TABLE T_Usuario (
    usuario VARCHAR(100) NOT NULL PRIMARY KEY,
    clave VARCHAR(255) NOT NULL,
    perfil ENUM('administrador', 'jugador') NOT NULL
);

CREATE TABLE T_Jugador (
    jugadorId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreCompleto VARCHAR(200) DEFAULT NULL,
    usuario VARCHAR(100),
    CONSTRAINT T_Jugador_ibfk_1 FOREIGN KEY (usuario)
        REFERENCES T_Usuario (usuario)
);

CREATE TABLE T_Torneo (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreTorneo VARCHAR(100) DEFAULT NULL,
    fecha DATE NULL,
    estado ENUM('No finalizado', 'Finalizado') DEFAULT 'No finalizado',
    numJugadores INT DEFAULT 0,
    campeon VARCHAR(100) DEFAULT 'Por decidir ...'
);

 CREATE TABLE T_Partido (
    partidoId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ronda ENUM('Cuartos', 'Semifinal', 'Final') NOT NULL,
    torneoId INT,
    jugadorA INT,
    jugadorB INT,
    ganador INT DEFAULT NULL,
    CONSTRAINT T_Partido_ibfk_1 FOREIGN KEY (jugadorA)
        REFERENCES T_Jugador (jugadorId),
    CONSTRAINT T_Partido_ibfk_2 FOREIGN KEY (jugadorB)
        REFERENCES T_Jugador (jugadorId),
    CONSTRAINT T_Partido_ibfk_3 FOREIGN KEY (torneoId)
        REFERENCES T_Torneo (ID)
);

SELECT 
    *
FROM
    T_Partido;

SELECT 
    *
FROM
    T_Torneo;

SELECT 
    *
FROM
    T_Jugador;

-- Ejecutar test.php

INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Javi Abandono', 'javi');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Sergio Serrano', 'sergio');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Daniel Okolo', 'okolo');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Yeray Rus', 'yeray');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Stewart Jordi', 'stewart');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Adrián Castillo', 'castillo');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Fernando Alonso', 'fernando');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Jaume Altazona', 'jaume');

INSERT INTO T_Torneo (nombreTorneo, fecha, numJugadores) VALUES 
('Torneo IES Son Ferrer','2023-03-25', '8');
INSERT INTO T_Torneo (nombreTorneo, estado, numJugadores, campeon) VALUES 
('Torneo 2021', 'Finalizado', '8', 'Carlos Sogorb');
INSERT INTO T_Torneo (nombreTorneo, fecha, estado, numJugadores, campeon) VALUES 
('Torneo navidad 2022','2022-12-22', 'Finalizado', '8', 'Carlos Acedo');

INSERT INTO T_Partido (ronda, torneoId, jugadorA, jugadorB) VALUES ('Cuartos', '1','1', '2');
INSERT INTO T_Partido (ronda, jugadorA, jugadorB, ganador) VALUES ('Cuartos', '3', '4', '3');