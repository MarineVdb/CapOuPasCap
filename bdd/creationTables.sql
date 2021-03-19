CREATE TABLE Utilisateur(
	utilisateur_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100),
	prenom VARCHAR(100),
	email VARCHAR(100) UNIQUE NOT NULL,
	role VARCHAR(100),
	mot_de_passe VARCHAR(100) NOT NULL,
	tel VARCHAR(100), 
	adresse1 TEXT,
	adresse2 TEXT,
	localite VARCHAR(100),
	code_postal VARCHAR(100)	
);

CREATE TABLE Taille_vetement(
	taille_vetement_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL DEFAULT 'M'
);	

CREATE TABLE Marque(
	marque_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL,
	description TEXT
);

CREATE TABLE Categorie(
	categorie_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL,
	categorie INT,
	FOREIGN KEY (categorie) REFERENCES Categorie(categorie_id)
);


CREATE TABLE Produit(
	produit_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL,
	description TEXT,
	prix FLOAT DEFAULT '0',
	actif BOOLEAN DEFAULT '1',
	quantite INT DEFAULT '1',
	dimension_largeur FLOAT,
	dimension_longueur FLOAT,	
	dimension_hauteur FLOAT,
	poids FLOAT,
	solde_pourcentage INT DEFAULT '0',
	categorie INT,
	marque INT,
	taille_vetement INT,
	FOREIGN KEY (categorie) REFERENCES Categorie(categorie_id),
	FOREIGN KEY (marque) REFERENCES Marque(marque_id),
	FOREIGN KEY (taille_vetement) REFERENCES Taille_vetement(taille_vetement_id)
);


CREATE TABLE Photo(
	photo_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	image VARCHAR(100) NOT NULL,
	description TEXT,
	ordre INT,
	produit INT,
	FOREIGN KEY (produit) REFERENCES Produit(produit_id)
);


CREATE TABLE Commande_entete(
	commande_entete_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	date_creation DATETIME NOT NULL,
        utilisateur INT, 
	FOREIGN KEY (utilisateur) REFERENCES Utilisateur(utilisateur_id)
);



CREATE TABLE Commande_detail(
	commande_detail_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	quantite INT NOT NULL,
	prix FLOAT NOT NULL,
	commande_entete INT,
	produit INT,
	FOREIGN KEY (commande_entete) REFERENCES Commande_entete(commande_entete_id),
	FOREIGN KEY (produit) REFERENCES Produit(produit_id)
);


