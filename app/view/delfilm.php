<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('util')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un utilisateur
?>
<html>
    <head>
        <title>Suppression film</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controllerdelfilm.php">
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nom du film</span>
                <input type="text" name="namefilm" class="form-control" placeholder="Nom du film à supprimer" aria-describedby="basic-addon1">
            </div>
			<br>
            <div class="input-group">
  				<span class="input-group-addon">Année</span>
  				<input type="number" name="annee" class="form-control" aria-label="Amount">
			</div>
            <br>
            <button type="Submit" name="delfilm" class="btn btn-default">Valider</button>
            <a href="/user/listefilm"><button type="button" class="btn btn-default">Retour</button></a>
        </form>
    </body>
</html>