<!DOCTYPE html>
<html>
    <head>
        <title>Ajout catégorie</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddcategoriefilm.php">
			Catégorie : <br>
			<input type="text" name="namecat"><br>
            <button type="Submit" name="Addcat" class="btn btn-default">Valider</button>
        </form>
        <a href="/app/view/dashboardadmin.php"><button type="button" class="btn btn-default">Retour</button></a>
    </body>
</html>