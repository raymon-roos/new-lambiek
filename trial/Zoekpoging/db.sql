DROP DATABASE IF EXISTS Lambiek;

CREATE DATABASE Lambiek;

USE Lambiek;

CREATE TABLE `Auteurs` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(100) NOT NULL,
    Achternaam VARCHAR(100) NOT NULL,
);

INSERT INTO Auteurs (Naam, Achternaam)
VALUES ('Jan', 'Berglin'), 
('Ben', 'Janssen'),
('Aak', 'Buur'),
('Abbot', 'Jack');
