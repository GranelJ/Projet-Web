<!DOCTYPE html>
<html>
	<head>
		<title> Modifier informations </title>
	</head>

	<body>
		<h1> Modifier les informations </h1>
		<form method="POST" action="/app/controllereditfilm.php"> 
			Nom du film : <br>
			<input type="text" name="NomFilm"><br>
			Categorie : <br>
			<select name="Categorie">
				<OPTION>Science Fiction</OPTION>
				<OPTION>Action</OPTION> <!--tous les types de film dans la bd-->
			</select> <br>
			Annee : <br>
			<input type="text" name="Annee"><br>
			Vu : <br>
			<input type="radio" name="Vu"><br>
			Note : <br>
			<input type="text" name="Note"><br>
			Realisateur : <br>
			<input type="text" name="Realisateur"><br>
			Acteurs principaux : <br>
			<input type="text" name="PActeur"><br>

			<input type="Submit" name="ModifFilm">
		</form>
		<a href="">Liste des Films</a> <!--Bouton retour-->
	</body>
</html>