<?php 
	require_once("../model/ModelActeur.php");
	require_once("../model/ModelRealisateur.php");
	require_once("../model/ModelCategorieFilm.php");
	require_once("../model/ModelFilm.php");
	require_once("../model/ModelAjouter.php");

	if(!empty($_POST['nomFilm']) AND !empty($_POST['catFilm']) AND !empty($_POST['annee']) AND !empty($_POST['nomRealisateur']) 
	AND !empty($_POST['prenomRealisateur']) AND !empty($_POST['nomPActeur']) AND !empty($_POST['prenomPActeur'])){
		//si tous les champs remplis
		$nomfilm = htmlspecialchars($_POST['nomFilm']);
		$cat = htmlspecialchars($_POST['catFilm']);
		$annee = htmlspecialchars($_POST['annee']);
		$vu = htmlspecialchars($_POST['Vu']);
		$note = htmlspecialchars($_POST['note']);
		$nomrealisateur = htmlspecialchars($_POST['nomRealisateur']);
		$prenomrealisateur = htmlspecialchars($_POST['prenomRealisateur']);
		$nompacteur = htmlspecialchars($_POST['nomPActeur']);
		$prenompacteur = htmlspecialchars($_POST['prenomPActeur']);

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
		$idutil=$_COOKIE['info'];
		createFilm($nomfilm, $annee, $id_cat, $id_real, $id_act);
		$idfilm=getIdFilm($nomfilm, $annee);
		createfilmforajouter($note,$vu,$idfilm,$idutil);
		echo "Film ajouté, vous allez être redirigé vers le formulaire d'ajout de film.";
		header('refresh:3;url=/user/ajoutfilm');
	}
	echo "L'un des champs n'est pas rempli";
	header('refresh:2;url=/user/ajoutfilm');
?>