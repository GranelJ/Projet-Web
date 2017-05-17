<!DOCTYPE html>
<html>
	<head>
		<title> Ajouter un film </title>
	</head>

	<body>
		<h1> Ajouter un film </h1>
		<form> 
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

			<input type="Submit" name="AddFilm">
			<a href="">Liste des Films</a> <!--Bouton retour-->
		</form>
	</body>
</html>