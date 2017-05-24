<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('util')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un utilisateur
	require_once("../controller/controllerprecreatefilm.php");
?>
<html>
	<head>
		<title> Modifier informations </title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<h1> Modifier les informations </h1>
		<form method="POST" action="/app/controllereditfilm.php"> 
			Nom du film : <br>
			<input type="text" name="NomFilm"><br>
			Categorie : <br>
			<select name="Categorie">
				<?php
					while ($choix=$cat->fetch()){
						echo "<option>".$choix[0]."</option>";
					 	}
				?>  <!--tous les types de film dans la bd-->
			</select> <br>
			Annee : <br>
			<input type="number" name="Annee"><br>
			Vu : <br>
			<input type="checkbox" name="Vu"><br>
			Note /5: <br>
			<input type="number" name="Note"><br>
			Nom realisateur : <br>
			<input type="text" name="NomRealisateur"><br>
			Prenom realisateur : <br>
			<input type="text" name="PrenomRealisateur"><br>
			Nom acteur principal : <br>
			<input type="text" name="NomPActeur"><br>
			Prenom acteur principal : <br>
			<input type="text" name="PrenomPActeur"><br>

			<button type="Submit" name="modiffilm" class="btn btn-default">Valider</button>
			<a href="/user/listefilm"><button type="button" class="btn btn-default">Retour</button></a> <!--Bouton retour-->
		</form>
	</body>
</html>