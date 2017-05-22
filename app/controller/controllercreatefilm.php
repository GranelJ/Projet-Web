<?php
	require_once('/app/model/ModelFilm.php');
	require_once('/app/model/ModelAjouter.php');

	if(isset($_POST['NomFilm']) AND isset($_POST['Categorie']) AND isset($_POST['Annee']) AND isset($_POST['Vu']) AND isset($_POST['Note']) AND isset($_POST['Realisateur']) AND isset($_POST['PActeur'])){
		$nomfilm = htmlspecialchars($_POST['NomFilm']);
		$cat = htmlspecialchars($_POST['Categorie']);
		$annee = htmlspecialchars($_POST['Annee']);
		$vu = htmlspecialchars($_POST['Vu']);
		$note = htmlspecialchars($_POST['Note']);
		$realisateur = htmlspecialchars($_POST['Realisateur']);
		$pacteur = htmlspecialchars($_POST['PActeur']);
		
		createFilm($nomfilm, $annee, $cat, $realisateur, $pacteur);
		
		echo "Film ajouté, vous allez être redirigé vers le formulaire d'ajout de film.";
		header('refresh:5;url=/app/view/ajoutfilm.php');
		}
?>