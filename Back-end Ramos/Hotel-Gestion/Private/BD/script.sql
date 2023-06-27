CREATE TABLE Client(
   idClient INT UNSIGNED AUTO_INCREMENT,
   prenom VARCHAR(100) NOT NULL,
   nom VARCHAR(50) NOT NULL,
   sexe VARCHAR(5) NOT NULL,
   couriel VARCHAR(100),
   login VARCHAR(50) NOT NULL,
   mdp VARCHAR(255) NOT NULL,
   telephone VARCHAR(30) NOT NULL,
   nationalite VARCHAR(70) NOT NULL,
   PRIMARY KEY(idClient),
   UNIQUE(couriel)
);

CREATE TABLE Factures(
   numFacture INT UNSIGNED AUTO_INCREMENT,
   consomation VARCHAR(255),
   totalconso INT UNSIGNED NOT NULL,
   services VARCHAR(255),
   totalservices INT UNSIGNED  NOT NULL,
   sejour VARCHAR(255),
   total INT UNSIGNED NOT NULL,
   PRIMARY KEY(numFacture)
);

CREATE TABLE categorie(
   idcategorie INT UNSIGNED AUTO_INCREMENT,
   nom VARCHAR(60) NOT NULL,
   description VARCHAR(255),
   nuité INT UNSIGNED NOT NULL,
   PRIMARY KEY(idcategorie),
   UNIQUE(nom)
);

CREATE TABLE Administrateur(
   idmin INT UNSIGNED AUTO_INCREMENT,
   login VARCHAR(50) NOT NULL,
   motDePasse VARCHAR(50) NOT NULL,
   email VARCHAR(80) NOT NULL,
   role VARCHAR(50) NOT NULL,
   PRIMARY KEY(idmin),
   UNIQUE(login),
   UNIQUE(email),
   UNIQUE(role)
);

CREATE TABLE personel(
   idperso INT UNSIGNED AUTO_INCREMENT,
   prenom VARCHAR(100) NOT NULL,
   nom VARCHAR(50) NOT NULL,
   login VARCHAR(75) NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   role VARCHAR(70) NOT NULL,
   email VARCHAR(100) NOT NULL,
   idmin INT UNSIGNED NOT NULL,
   PRIMARY KEY(idperso),
   UNIQUE(login),
   UNIQUE(email),
   FOREIGN KEY(idmin) REFERENCES Administrateur(idmin)
);

CREATE TABLE Hotel(
   num INT UNSIGNED AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   adresse VARCHAR(255) NOT NULL,
   pays VARCHAR(50) NOT NULL,
   PRIMARY KEY(num)
);

CREATE TABLE Reservation(
   _Ref INT UNSIGNED AUTO_INCREMENT,
   dateReservation DATE NOT NULL,
   entré DATE NOT NULL,
   sortie DATE NOT NULL,
   Nbadulte SMALLINT NOT NULL,
   Nbenfant SMALLINT NOT NULL,
   Nbchambre SMALLINT NOT NULL,
   statusReservation VARCHAR(50) NOT NULL,
   idperso INT UNSIGNED NOT NULL,
   numFacture INT UNSIGNED NOT NULL,
   idClient INT UNSIGNED NOT NULL,
   PRIMARY KEY(_Ref),
   UNIQUE(numFacture),
   FOREIGN KEY(idperso) REFERENCES personel(idperso),
   FOREIGN KEY(numFacture) REFERENCES Factures(numFacture),
   FOREIGN KEY(idClient) REFERENCES Client(idClient)
);

CREATE TABLE Chambre(
   numero SMALLINT UNSIGNED AUTO_INCREMENT,
   etat VARCHAR(50) NOT NULL,
   _Ref INT UNSIGNED,
   idcategorie INT UNSIGNED NOT NULL,
   PRIMARY KEY(numero),
   FOREIGN KEY(_Ref) REFERENCES Reservation(_Ref),
   FOREIGN KEY(idcategorie) REFERENCES categorie(idcategorie)
);

CREATE TABLE Service(
   numService INT UNSIGNED AUTO_INCREMENT,
   nom VARCHAR(100) NOT NULL,
   description VARCHAR(255) NOT NULL,
   prix SMALLINT UNSIGNED NOT NULL,
   num INT UNSIGNED NOT NULL,
   PRIMARY KEY(numService),
   UNIQUE(nom),
   FOREIGN KEY(num) REFERENCES Hotel(num)
);
