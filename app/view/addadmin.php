<!DOCTYPE html>
<html>
    <head>
        <title>Ajout administrateur</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddadmin.php">
			Email : <br>
			<input type="text" name="emailadmin"><br>
			Mot de Passe : <br>
			<input type="password" name="mdpadmin"><br>
            <button type="Submit" name="Addadmin" class="btn btn-default">Valider</button>
        </form>
        <a href="/app/view/dashboardadmin.php"><button type="button" class="btn btn-default">Retour</button></a>
    </body>
</html>