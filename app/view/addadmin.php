<!DOCTYPE html>
<html>
    <head>
        <title>"Ajout administrateur"</title>
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddadmin.php">
			Email : <br>
			<input type="text" name="email"><br>
			Mot de Passe : <br>
			<input type="password" name="mdp"><br>
            <input type="Submit" name="Addadmin">
        </form>
        <a href="dashboardadmin.php">Retour</a>
    </body>
</html>