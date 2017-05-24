<?php require_once("../model/ModelActeur.php");?>
<?php require_once("../model/ModelRealisateur.php");?>
<?php require_once("../model/ModelCategorieFilm.php");?>
<?php require_once("../model/ModelFilm.php");?>

<?php
	if(!empty($_POST['NomFilm']) AND !empty($_POST['Categorie']) AND !empty($_POST['Annee']) AND !empty($_POST['Vu']) AND 
	!empty($_POST['Note']) AND !empty($_POST['NomRealisateur']) AND !empty($_POST['PrenomRealisateur']) AND 
	!empty($_POST['NomPActeur']) AND !empty($_POST['PrenomPActeur'])){
		//si tous les champs remplis
		header("Location: /fraise.php");
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

		$id_real = getIdReal($nomrealisateur, $prenomrealisateur);
		$id_act = getIdAct($nompacteur, $prenompacteur);
		$id_cat = getIdCat($cat);
		createFilm($nomfilm, $annee, $id_cat, $id_real, $id_act);
		echo "Film ajouté, vous allez être redirigé vers le formulaire d'ajout de film.";
		header('refresh:4;url=../view/ajoutfilm.php');
	}
	echo "L'un des champs n'est pas rempli";
	header('refresh:3;url=../view/ajoutfilm.php');
?>