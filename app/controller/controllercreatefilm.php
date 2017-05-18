<?php
	require_once('../model/ModelFilm.php');

	if(isset($_POST['NomFilm']) AND isset($_POST['Categorie']) AND isset($_POST['Annee']) AND isset($_POST['Vu']) AND isset($_POST['Note']) AND isset($_POST['Realisateur']) AND isset($_POST['PActeur'])){
		$nomfilm = htmlentities($_POST['NomFilm'], ENT_QUOTES);
		$cat = htmlentities($_POST['Categorie'], ENT_QUOTES);
		$annee = htmlentities($_POST['Annee'], ENT_QUOTES);
		$vu = htmlentities($_POST['Vu'], ENT_QUOTES);
		$note = htmlentities($_POST['Note'], ENT_QUOTES);
		$realisateur = htmlentities($_POST['Realisateur'], ENT_QUOTES);
		$pacteur = htmlentities($_POST['PActeur'], ENT_QUOTES);
		
		$result = createFilm($nomfilm, $cat, $annee, $vu, $note, $realisateur, $pacteur);
		echo "Film ajouté";
		header('refresh:3;url=/app/view/listefilm.php');
		}
	}
?>