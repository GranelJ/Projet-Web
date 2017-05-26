<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('admin')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un admin
?>
<html>
    <head>
        <title>Ajout administrateur</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddadmin.php">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Email</span>
                <input type="email" name="emailadmin" class="form-control" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Mot de passe</span>
                <input type="password" name="mdpadmin" class="form-control" aria-describedby="basic-addon1">
            </div>
            <br>
            <button type="Submit" name="Addadmin" class="btn btn-default">Valider</button>
            <a href="/admin/dashboard"><button type="button" class="btn btn-default">Retour</button></a>
        </form>
    </body>
</html>