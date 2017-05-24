<!DOCTYPE html>
<?php require_once("/app/controller/controllerprecreatefilm.php");?>
<html>
	<head>
		<title> Ajouter un film </title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<h1> Ajouter un film </h1>
		<form method="POST" action="/app/controller/controllercreatefilm.php"> 
			Nom du film : <br>
			<input type="text" name="NomFilm"><br>
			Categorie : <br>
			<select name="Categorie">
				<?php
					while ($choix=$cat->fetch()){ ?>
						<option value="<?php echo $choix['Nom'] ?>"><?php echo $choix['Nom'] ?></option>
				<?php 	} ?>
				<OPTION>Science Fiction</OPTION>
				<OPTION>Action</OPTION> <!--tous les types de film dans la bd-->
			</select> <br>
			Annee : <br>
			<input type="number" name="Annee"><br>
			Vu : <br>
			<input type="checkbox" name="Vu" value="vu"><br>
			Note /5 : <br>
			<input type="number" name="Note"><br>
			Nom realisateur : <br>
			<input type="text" name="NomRealisateur"><br>
			Prenom realisateur : <br>
			<input type="text" name="PrenomRealisateur"><br>
			Nom acteur principal : <br>
			<input type="text" name="NomPActeur"><br>
			Prenom acteur principal : <br>
			<input type="text" name="PrenomPActeur"><br>

            <button type="Submit" name="Addfilm" class="btn btn-default">Valider</button>
			<a href="/app/view/listefilm.php"><button type="button" class="btn btn-default">Retour</button></a> <!--Bouton retour-->
		</form>
	</body>
</html>