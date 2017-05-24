<?php
	require_once('../model/ModelFilm.php');

	if(!empty($_POST['NomFilm']) AND !empty($_POST['Categorie']) AND !empty($_POST['Annee']) AND 
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

		$existact = getIdAct($nompacteur,$prenompacteur);
		if (empty($existact)){//si acteur existe pas
			createActeur($nompacteur,$prenompacteur);
		}

		$existreal = getIdReal($nomrealisateur, $prenomrealisateur);
		if(empty($existreal)){//si realisateur existe pas
			createRealisateur($nomrealisateur,$prenomrealisateur);
		}

		$id = getIdFilm($nomfilm, $annee);
		editFilm($id ,$nomfilm, $cat, $annee, $vu, $note, $realisateur, $pacteur);
		echo "Film modifié";
		header('refresh:3;url=/user/listefilm');
		}
?>