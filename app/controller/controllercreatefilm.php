<?php
	require_once('/app/model/ModelFilm.php');
	require_once('/app/model/ModelCategorieFilm.php');
	require_once('/app/model/ModelActeur.php');
	require_once('/app/model/ModelRealisateur.php');

	if(!empty($_POST['NomFilm']) AND !empty($_POST['Categorie']) AND !empty($_POST['Annee']) AND !empty($_POST['Vu']) AND 
	!empty($_POST['Note']) AND !empty($_POST['NomRealisateur']) AND !empty($_POST['PrenomRealisateur']) AND 
	!empty($_POST['NomPActeur']) AND !empty($_POST['PrenomPActeur'])){
		//si tous les champs remplis
		$nomfilm = htmlspecialchars($_POST['NomFilm']);
		$cat = htmlspecialchars($_POST['Categorie']);
		$annee = htmlspecialchars($_POST['Annee']);
		$vu = htmlspecialchars($_POST['Vu']);
		$note = htmlspecialchars($_POST['Note']);
		$nomrealisateur = htmlspecialchars($_POST['NomRealisateur']);
		$prenomrealisateur = htmlspecialchars($_POST['PrenomRealisateur']);
		$nompacteur = htmlspecialchars($_POST['NomPActeur']);
		$prenompacteur = htmlspecialchars($_POST['PrenomPActeur']);

		header("Location: /fraise.php");

		$existact = getIdAct($nompacteur,$prenompacteur);
		if (empty($existact)){//si acteur existe pas
			createActeur($nompacteur,$prenompacteur);
		}
		
		$existreal = getIdReal($nomrealisateur, $prenomrealisateur);
		if(empty($existreal)){//si realisateur existe pas
			createRealisateur($nomrealisateur,$prenomrealisateur);
		}

		$id_real = getIdReal($nomrealisateur, $prenomrealisateur);
		$id_act = getIdAct($nompacteur, $prenompacteur);
		$id_cat = getIdCat($cat);
		createFilm($nomfilm, $annee, $id_cat, $id_real, $id_act);
		echo "Film ajouté, vous allez être redirigé vers le formulaire d'ajout de film.";
		header('refresh:4;url=/app/view/ajoutfilm.php');
	}
	echo "L'un des champs n'est pas rempli";
	header('refresh:3;url=/app/view/ajoutfilm.php');
?>