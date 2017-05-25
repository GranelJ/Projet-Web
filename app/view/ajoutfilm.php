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
		<title> Ajouter un film </title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<h1> Ajouter un film </h1>
		<form method="POST" action="/app/controller/controllercreatefilm.php"> 
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nom du film</span>
                <input type="text" name="nomFilm" class="form-control" aria-describedby="basic-addon1">
            </div>
			<br>
			Categorie : <br>
			<select name="catFilm" size ="1">
				<?php
					while ($choix=$cat->fetch()){
						echo "<option value=".$choix[0].">".$choix[0]."</option>";
					 	}
				?>  <!--tous les types de film dans la bd-->
			</select> <br>
			<div class="input-group">
  				<span class="input-group-addon">Année</span>
  				<input type="number" name="annee" class="form-control" aria-label="Amount">
			</div>
			<br>
			Vu :
			<input type="checkbox" name="Vu" value="vu"><br>
			<div class="input-group">
  				<span class="input-group-addon">Note</span>
  				<input type="number" name="note" class="form-control" aria-label="Amount" min="0" max="5">
  				<span class="input-group-addon">/5</span>
			</div>
			<br>
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nom du realisateur</span>
                <input type="text" name="nomRealisateur" class="form-control" aria-describedby="basic-addon1">
            </div>
			<br>
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Prenom du realisateur</span>
                <input type="text" name="prenomRealisateur" class="form-control" aria-describedby="basic-addon1">
            </div>
			<br>
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nom de l'acteur/actrice principal(e)</span>
                <input type="text" name="nomPActeur" class="form-control" aria-describedby="basic-addon1">
            </div>
			<br>
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Prenom de l'acteur/actrice principal(e) realisateur</span>
                <input type="text" name="prenomPActeur" class="form-control" aria-describedby="basic-addon1">
            </div>
			<br>
            <button type="Submit" name="Addfilm" class="btn btn-default">Valider</button>
			<a href="/user/listefilm"><button type="button" class="btn btn-default">Retour</button></a> <!--Bouton retour-->
		</form>
	</body>
</html>