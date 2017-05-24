<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('admin')){
		header("Location: /app/view/accueil.php");
	}//verifie que la personne qui accède est un admin
?>
<html>
    <head>
        <title>Ajout administrateur</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddadmin.php">
			Email : <br>
			<input type="email" name="emailadmin"><br>
			Mot de Passe : <br>
			<input type="password" name="mdpadmin"><br>
            <button type="Submit" name="Addadmin" class="btn btn-default">Valider</button>
            <a href="/app/view/dashboardadmin.php"><button type="button" class="btn btn-default">Retour</button></a>
        </form>
    </body>
</html>