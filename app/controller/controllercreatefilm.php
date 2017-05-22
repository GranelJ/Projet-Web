<?php
	require_once('../model/ModelFilm.php');
	require_once('../model/ModelCategorieFilm.php');
	require_once('../model/ModelActeur.php')

	if(isset($_POST['NomFilm']) AND isset($_POST['Categorie']) AND isset($_POST['Annee']) AND isset($_POST['Vu']) AND isset($_POST['Note']) AND isset($_POST['NomRealisateur']) AND isset($_POST['PrenomRealisateur']) AND isset($_POST['NomPActeur']) AND isset($_POST['PrenomPActeur'])){
		$nomfilm = htmlspecialchars($_POST['NomFilm']);
		$cat = htmlspecialchars($_POST['Categorie']);
		$annee = htmlspecialchars($_POST['Annee']);
		$vu = htmlspecialchars($_POST['Vu']);
		$note = htmlspecialchars($_POST['Note']);
		$nomrealisateur = htmlspecialchars($_POST['NomRealisateur']);
		$prenomrealisateur = htmlspecialchars($_POST['PrenomRealisateur']);
		$nompacteur = htmlspecialchars($_POST['NomPActeur']);
		$prenompacteur = htmlspecialchars($_POST['PrenomPActeur']);
		
		$id_real = getIdReal($nomrealisateur, $prenomrealisateur);
		$id_act = getIdAct($nompacteur, $prenompacteur);
		$id_cat = getIdCat($cat);
		createFilm($nomfilm, $annee, $id_cat, $id_real, $id_act);

		echo "Film ajouté, vous allez être redirigé vers le formulaire d'ajout de film.";
		header('refresh:5;url=/app/view/ajoutfilm.php');
		}
?>