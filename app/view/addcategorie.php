<!DOCTYPE html>
<html>
    <head>
        <title>"Ajout catégorie"</title>
    </head>

    <body>
        <form method="POST" action="/app/controller/controlleraddcategoriefilm.php">
			Catégorie : <br>
			<input type="text" name="namecat"><br>
            <input type="Submit" name="Addcat">
            <a href="/app/view/dashboardadmin.php">Retour</a>
        </form>
    </body>
</html>