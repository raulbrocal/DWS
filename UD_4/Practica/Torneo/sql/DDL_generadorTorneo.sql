DROP DATABASE IF EXISTS torneosTenisMesaDB;
CREATE DATABASE IF NOT EXISTS torneosTenisMesaDB;
USE torneosTenisMesaDB;

CREATE TABLE T_Usuario (
    usuarioId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    clave VARCHAR(255) NOT NULL,
    perfil ENUM('administrador', 'jugador') NOT NULL
);

CREATE TABLE T_Jugador (
    jugadorId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreCompleto VARCHAR(200) DEFAULT NULL,
    usuario INT,
    CONSTRAINT T_Jugador_ibfk_1 FOREIGN KEY (usuario)
        REFERENCES T_Usuario (usuarioId)
);

CREATE TABLE T_Partido (
    partidoId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ronda ENUM('cuartos', 'semifinal', 'final') NOT NULL,
    jugadorA INT,
    jugadorB INT,
    ganador INT,
    CONSTRAINT T_Partido_ibfk_1 FOREIGN KEY (jugadorA)
        REFERENCES T_Jugador (jugadorId),
    CONSTRAINT T_Partido_ibfk_2 FOREIGN KEY (jugadorB)
        REFERENCES T_Jugador (jugadorId),
    CONSTRAINT T_Partido_ibfk_3 FOREIGN KEY (ganador)
        REFERENCES T_Jugador (jugadorId)
);

CREATE TABLE T_Torneo (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreTorneo VARCHAR(100) DEFAULT NULL,
    fecha DATE NULL,
    estado ENUM('No finalizado', 'Finalizado') DEFAULT 'No finalizado',
    numJugadores INT DEFAULT 0,
    campeon VARCHAR(100) DEFAULT NULL
);

CREATE TABLE T_Torneo_T_Partido (
    torneo INT,
    partido INT,
    PRIMARY KEY (torneo , partido),
    FOREIGN KEY (torneo)
        REFERENCES T_Torneo (ID),
    FOREIGN KEY (partido)
        REFERENCES T_Partido (partidoId)
);

INSERT INTO T_Usuario (usuario, clave, perfil) VALUES ('raul', '1234', 'administrador');
INSERT INTO T_Usuario (usuario, clave, perfil) VALUES ('javi', '1234', 'jugador');
INSERT INTO T_Usuario (usuario, clave, perfil) VALUES ('sergio', '1234', 'jugador');

INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Javi Abandono', '2');
INSERT INTO T_Jugador (nombreCompleto, usuario) VALUES ('Sergio Serrano', '3');

INSERT INTO T_Partido (ronda, jugadorA, jugadorB, ganador) VALUES ('cuartos', '1', '2', '2');

INSERT INTO T_Torneo (nombreTorneo, fecha, estado, numJugadores, campeon) VALUES 
('Torneo IES Son Ferrer','2023-03-25', 'No finalizado', '8', 'Jugador 1');
INSERT INTO T_Torneo (nombreTorneo, estado, numJugadores, campeon) VALUES 
('Torneo 2021', 'Finalizado', '8', 'Carlos Sogorb');
INSERT INTO T_Torneo (nombreTorneo, fecha, estado, numJugadores, campeon) VALUES 
('Torneo navidad 2022','2022-12-22', 'Finalizado', '8', 'Carlos Acedo');

INSERT INTO T_Torneo_T_Partido VALUES ('1','1');
