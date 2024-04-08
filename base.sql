CREATE TABLE saison(
   idSaison INT PRIMARY KEY,
   dureeEp INT NOT NULL
);

CREATE TABLE utilisateur(
   email VARCHAR(50) PRIMARY KEY,
   pseudo VARCHAR(50) NOT NULL,
   mdp VARCHAR(50) NOT NULL
);

CREATE TABLE personnage(
   idPerso INT PRIMARY KEY,
   nomPerso VARCHAR(50) NOT NULL,
   email VARCHAR(50) NOT NULL,
   FOREIGN KEY(email) REFERENCES utilisateur(email)
);

CREATE TABLE partie(
   idPartie INT PRIMARY KEY,
   dureeChap INT NOT NULL,
   idSaison INT NOT NULL,
   FOREIGN KEY(idSaison) REFERENCES saison(idSaison)
);

CREATE TABLE figurer(
   idPerso INT ,
   idPartie INT,
   persoPrinc BOOLEAN NOT NULL,
   datePartie DATE NOT NULL,
   PRIMARY KEY(idPerso, idPartie),
   FOREIGN KEY(idPerso) REFERENCES personnage(idPerso),
   FOREIGN KEY(idPartie) REFERENCES partie(idPartie)
);

INSERT INTO saison
VALUES(1, 26),
(2, 48),
(3, 39),
(4, 39),
(5, 38);

/*INSERT INTO utilisateur
VALUES ()
*/