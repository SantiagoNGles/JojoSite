DROP TABLE IF EXISTS figurer;
DROP TABLE IF EXISTS partie;
DROP TABLE IF EXISTS personnage;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS saison;

CREATE TABLE saison(
   idSaison INT PRIMARY KEY,
   dureeEp INT NOT NULL
);

CREATE TABLE utilisateur(
   id INT PRIMARY KEY AUTO_INCREMENT,
   email VARCHAR(50) NOT NULL UNIQUE,
   pseudo VARCHAR(50) NOT NULL UNIQUE,
   mdp VARCHAR(50) NOT NULL
);

CREATE TABLE personnage(
   idPerso INT PRIMARY KEY AUTO_INCREMENT,
   prenomPerso VARCHAR(50) NOT NULL,
   nomPerso VARCHAR(50) NOT NULL,
   email VARCHAR(50),
   FOREIGN KEY(email) REFERENCES utilisateur(email)
);

CREATE TABLE partie(
   idPartie INT PRIMARY KEY,
   dureeChap INT NOT NULL,
   idSaison INT NOT NULL,
   FOREIGN KEY(idSaison) REFERENCES saison(idSaison)
);

CREATE TABLE figurer(
   idPerso INT AUTO_INCREMENT,
   idPartie INT,
   persoPrinc BOOLEAN NOT NULL,
   datePartie DATE NOT NULL,
   PRIMARY KEY(idPerso, idPartie),
   FOREIGN KEY(idPerso) REFERENCES personnage(idPerso),
   FOREIGN KEY(idPartie) REFERENCES partie(idPartie)
);

INSERT INTO saison
VALUES (1, 48),
(2, 39),
(3, 39);

INSERT INTO personnage (prenomPerso, nomPerso, email) 
VALUES ("Joseph", "Joestar", NULL),
       ("Jotaro", "Kujo", NULL),
       ("Josuke", "Higashikata", NULL);

INSERT INTO partie
VALUES (2, 68, 1),
(3, 151, 2),
(4, 173, 3);

INSERT INTO figurer (idPartie, persoPrinc, datePartie)
VALUES (2, TRUE, "2012-12-07"),
(3, TRUE, "2014-04-04"),
(4, TRUE, "2016-04-01");