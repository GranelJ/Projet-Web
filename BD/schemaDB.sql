CREATE TABLE utilisateur(
	id_utilisateur SERIAL;
	email_util VARCHAR(50) NOT NULL;
	mdp_util VARCHAR(50) NOT NULL;
	CONSTRAINT PK_utilisateur PRIMARY KEY (id_utilisateur)
);

CREATE TABLE film(
	id_film SERIAL;
	nom_film VARCHAR(50) NOT NULL;
	annee_film INTEGER NOT NULL;
	cat_film INTEGER NOT NULL;
	realisateur_film VARCHAR(50) NOT NULL;
	acteur_film VARCHAR(50) NOT NULL;
	CONSTRAINT PK_film PRIMARY KEY (id_film)
);

CREATE TABLE ajouter(
 	note_film INTEGER;
	vu BOOLEAN;
	id_film INTEGER;
);

CREATE TABLE categorie_film(
	id_catfilm SERIAL;
	lib_cat VARCHAR(50) NOT NULL;
	CONSTRAINT PK_categorie_film PRIMARY KEY (id_catfilm)
);

CREATE TABLE acteur(
	id_acteur SERIAL;
	nom_acteur VARCHAR(50) NOT NULL;
	prenom_acteur VARCHAR(50) NOT NULL;
	CONSTRAINT PK_acteur PRIMARY KEY (id_acteur)
);

CREATE TABLE realisateur(
	id_realisateur SERIAL;
	nom_realisateur VARCHAR(50) NOT NULL;
	prenom_realisateur VARCHAR(50) NOT NULL;
	CONSTRAINT PK_realisateur PRIMARY KEY (id_realisateur)
);

CREATE TABLE administrateur(
	id_administrateur SERIAL;
	email_admin VARCHAR(50);
	mdp_admin VARCHAR(50);
	CONSTRAINT PK_administrateur PRIMARY KEY (id_administrateur)
);

ALTER TABLE film CONSTRAINT "film_fk1" FOREIGN KEY ("cat_film") REFERENCES categorie_film("id_catfilm");
ALTER TABLE film CONSTRAINT "film_fk2" FOREIGN KEY ("realisateur_film") REFERENCES realisateur("id_realisateur");
ALTER TABLE film CONSTRAINT "film_fk3" FOREIGN KEY ("acteur_film") REFERENCES acteur("id_acteur");

ALTER TABLE ajouter CONSTRAINT "ajouter_fk" FOREIGN KEY ("id_film") REFERENCES film("id_film");