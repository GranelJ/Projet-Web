<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<form method="POST" action="/app/controller/controllerinscription.php">
			Email : <br>
			<input type="text" name="email"><br>
			Mot de Passe : <br>
			<input type="password" name="mdp"><br>
			Confirmation mot de passe : <br>
			<input type="password" name="Cmdp"><br>
			<input type="Submit" name="inscrit">
			<a href="/app/view/accueil.php">Retour</a>
		</form>
	</body>
</html>