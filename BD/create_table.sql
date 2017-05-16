DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS film;
DROP TABLE IF EXISTS categorie_film;
DROP TABLE IF EXISTS acteur;
DROP TABLE IF EXISTS realisateur;

CREATE TABLE utilisateur(
	id_utilisateur SERIAL;
	email_util VARCHAR(50);
	mdp_util VARCHAR(50);
	CONSTRAINT PK_utilisateur PRIMARY_KEY (id_utilisateur)
);

CREATE TABLE film(
	id_film SERIAL;
	nom_film VARCHAR(50);
	annee_film INTEGER;
	note_film INTEGER;
	vu BOOLEAN;
	CONSTRAINT PK_film PRIMARY_KEY (id_film)
);

CREATE TABLE categorie_film(
	id_catfilm SERIAL;
	lib_cat VARCHAR(50);
	CONSTRAINT PK_categorie_film PRIMARY_KEY (id_catfilm)
);

CREATE TABLE acteur(
	id_acteur SERIAL;
	nom_acteur VARCHAR(50);
	prenom_acteur VARCHAR(50);
	CONSTRAINT PK_acteur PRIMARY_KEY (id_acteur)
);

CREATE TABLE realisateur(
	id_realisateur SERIAL;
	nom_realisateur VARCHAR(50);
	prenom_realisateur VARCHAR(50);
	CONSTRAINT PK_realisateur PRIMARY_KEY (id_realisateur)
);