<!DOCTYPE html>
<html>
    <head>
        <title>Ajout catégorie</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddcategoriefilm.php">
			Catégorie : <br>
			<input type="text" name="namecat"><br>
            <input type="Submit" name="Addcat">
        </form>
        <a href="/app/view/dashboardadmin.php">Retour</a>
    </body>
</html>