CREATE TABLE utilisateur(
	id_utilisateur SERIAL,
	email_util VARCHAR(50) NOT NULL,
	mdp_util VARCHAR(50) NOT NULL,
	CONSTRAINT PK_utilisateur PRIMARY KEY (id_utilisateur)
);

CREATE TABLE administrateur(
	id_administrateur SERIAL,
	email_admin VARCHAR(50),
	mdp_admin VARCHAR(50),
	CONSTRAINT PK_administrateur PRIMARY KEY (id_administrateur)
);

CREATE TABLE acteur(
	id_acteur SERIAL,
	nom_acteur VARCHAR(50) NOT NULL,
	prenom_acteur VARCHAR(50) NOT NULL,
	CONSTRAINT PK_acteur PRIMARY KEY (id_acteur)
);

CREATE TABLE categorie_film(
	id_catfilm SERIAL,
	lib_cat VARCHAR(50) NOT NULL,
	CONSTRAINT PK_categorie_film PRIMARY KEY (id_catfilm)
);

CREATE TABLE realisateur(
	id_realisateur SERIAL,
	nom_realisateur VARCHAR(50) NOT NULL,
	prenom_realisateur VARCHAR(50) NOT NULL,
	CONSTRAINT PK_realisateur PRIMARY KEY (id_realisateur)
);

CREATE TABLE film(
	id_film SERIAL,
	nom_film VARCHAR(50) NOT NULL,
	annee_film INTEGER NOT NULL,
	cat_film INTEGER NOT NULL,
	realisateur_film INTEGER NOT NULL,
	acteur_film INTEGER NOT NULL,
	CONSTRAINT PK_film PRIMARY KEY (id_film),
	CONSTRAINT "film_fk1" FOREIGN KEY ("cat_film") REFERENCES categorie_film("id_catfilm") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "film_fk2" FOREIGN KEY ("realisateur_film") REFERENCES realisateur("id_realisateur") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "film_fk3" FOREIGN KEY ("acteur_film") REFERENCES acteur("id_acteur") ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE realiser(
	id_film INTEGER,
	id_realisateur INTEGER,
	CONSTRAINT PK_realiser PRIMARY KEY (id_film, id_realisateur),
	CONSTRAINT "realiser_fk1" FOREIGN KEY ("id_film") REFERENCES film("id_film") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "realiser_fk2" FOREIGN KEY ("id_realisateur") REFERENCES realisateur("id_realisateur") ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE ajouter(
 	note_film INTEGER,
	vu BOOLEAN,
	id_film INTEGER,
	id_utilisateur INTEGER,
	CONSTRAINT PK_ajouter PRIMARY KEY (id_film, id_utilisateur),
	CONSTRAINT "ajouter_fk1" FOREIGN KEY ("id_film") REFERENCES film("id_film") ON DELETE CASCADE,
	CONSTRAINT "ajouter_fk2" FOREIGN KEY ("id_utilisateur") REFERENCES utilisateur("id_utilisateur") ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE avoir(
	id_cat INTEGER,
	id_film INTEGER,
	CONSTRAINT PK_avoir PRIMARY KEY (id_cat, id_film),
	CONSTRAINT "avoir_fk1" FOREIGN KEY ("id_cat") REFERENCES categorie_film("id_catfilm") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "avoir_fk2" FOREIGN KEY ("id_film") REFERENCES film("id_film") ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE jouer(
	id_film INTEGER,
	id_acteur INTEGER,
	CONSTRAINT PK_jouer PRIMARY KEY (id_film, id_acteur),
	CONSTRAINT "jouer_fk1" FOREIGN KEY ("id_film") REFERENCES film("id_film") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "jouer_fk2" FOREIGN KEY ("id_acteur") REFERENCES acteur("id_acteur") ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE modifier(
	id_administrateur INTEGER,
	id_cat INTEGER,
	CONSTRAINT PK_modifier PRIMARY KEY (id_administrateur, id_cat) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "modifier_fk1" FOREIGN KEY ("id_administrateur") REFERENCES administrateur("id_administrateur") ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT "modifier_fk2" FOREIGN KEY ("id_cat") REFERENCES categorie_film("id_catfilm") ON UPDATE CASCADE ON DELETE CASCADE
);