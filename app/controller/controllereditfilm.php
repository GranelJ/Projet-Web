<?php
	require_once('../model/ModelFilm.php');

	if(isset($_POST['NomFilm']) AND isset($_POST['Categorie']) AND isset($_POST['Annee']) AND isset($_POST['Vu']) AND isset($_POST['Note']) AND isset($_POST['Realisateur']) AND isset($_POST['PActeur'])){
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
		header('refresh:3;url=/app/view/listefilm.php');
		}
?>