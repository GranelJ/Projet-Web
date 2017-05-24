<?php
	require_once('../model/ModelFilm.php');

	if(!empty($_POST['NomFilm']) AND !empty($_POST['Categorie']) AND !empty($_POST['Annee']) 
	AND !empty($_POST['Vu']) AND !empty($_POST['Note']) AND !empty($_POST['Realisateur']) AND !empty($_POST['PActeur'])){
		$nomfilm = htmlspecialchars($_POST['NomFilm']);
		$cat = htmlspecialchars($_POST['Categorie']);
		$annee = htmlspecialchars($_POST['Annee']);
		$vu = htmlspecialchars($_POST['Vu']);
		$note = htmlspecialchars($_POST['Note']);
		$realisateur = htmlspecialchars($_POST['Realisateur']);
		$pacteur = htmlspecialchars($_POST['PActeur']);
		$id = getIdFilm($nomfilm, $annee);
		editFilm($id ,$nomfilm, $cat, $annee, $vu, $note, $realisateur, $pacteur);
		echo "Film modifié";
		header('refresh:3;url=/user/listefilm');
		}
?>