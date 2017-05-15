DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS film;
DROP TABLE IF EXISTS categorie_film;
DROP TABLE IF EXISTS acteur;
DROP TABLE IF EXISTS realisateur;

CREATE TABLE utilisateur(
	idutilisateur SERIAL;
	emailutil VARCHAR(50);
	mdputil VARCHAR(50);
	CONSTRAINT PK_utilisateur PRIMARY_KEY (idutilisateur)
);

CREATE TABLE film(
	idfilm SERIAL;
	nomfilm VARCHAR(50);
	anneefilm INTEGER;
	notefilm INTEGER;
	vu BOOLEAN;
	CONSTRAINT PK_film PRIMARY_KEY (idfilm)
);

CREATE TABLE categorie_film(
	idcatfilm SERIAL;
	libcat VARCHAR(50);
	CONSTRAINT PK_categorie_film PRIMARY_KEY (idcatfilm)
);

CREATE TABLE acteur(
	idacteur SERIAL;
	nomacteur VARCHAR(50);
	prenomacteur VARCHAR(50);
	CONSTRAINT PK_acteur PRIMARY_KEY (idacteur)
);

CREATE TABLE realisateur(
	idrealisateur SERIAL;
	nomrealisateur VARCHAR(50);
	prenomrealisateur VARCHAR(50);
	CONSTRAINT PK_realisateur PRIMARY_KEY (idrealisateur)
);