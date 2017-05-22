<!DOCTYPE html>
<html>
	<head>
		<title> Ajouter un film </title>
	</head>

	<body>
		<h1> Ajouter un film </h1>
		<form method="POST" action="/app/controller/controllercreatefilm.php"> 
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
			Acteur principal : <br>
			<input type="text" name="PActeur"><br>

			<input type="Submit" name="AddFilm">
		</form>
		<a href="/app/view/listefilm.php">Retour</a> <!--Bouton retour-->
	</body>
</html>