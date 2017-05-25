<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('admin')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un admin
?>
<html>
    <head>
        <title>Ajout catégorie</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddcategoriefilm.php">
			<div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Categorie</span>
                <input type="text" name="namecat" class="form-control" placeholder="Nom de la catégorie à ajouter" aria-describedby="basic-addon1">
            </div>
			<br>
            <button type="Submit" name="Addcat" class="btn btn-default">Valider</button>
            <a href="/admin/dashboard"><button type="button" class="btn btn-default">Retour</button></a>
        </form>
    </body>
</html>