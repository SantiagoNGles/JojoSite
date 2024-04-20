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
   idPerso INT PRIMARY KEY,
   nomPerso VARCHAR(50) NOT NULL UNIQUE,
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

-- INSERT INTO saison
-- VALUES(1, 26),
-- (2, 48),
-- (3, 39),
-- (4, 39),
-- (5, 38);

-- INSERT INTO personnage
-- VALUES(2, "Joseph Joestar", NULL),
-- (3, "Jotaro Kujo", NULL),
-- (4, "Josuke Higashikata", NULL);

-- INSERT INTO partie
-- VALUES (1, 45, 1)
-- (2, 68, 1),
-- (3, 151, 2),
-- (4, 173, 3),
-- (5, 154, 4),
-- (6, 152, 5);

-- INSERT INTO
-- VALUES (2, 2, TRUE, "07-12-2012"),
-- (3, 3, TRUE, "04-04-2014"),
-- (4, 4, TRUE, "01-04-2016");