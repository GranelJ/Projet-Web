<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<form method="POST" action="/app/controller/controllerinscription.php">
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Email</span>
				<input type="email" name="email" class="form-control" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Mot de passe</span>
				<input type="password" name="mdp" class="form-control" aria-describedby="basic-addon1">
				<span class="input-group-addon" id="basic-addon1">Confirmation mot de passe</span>
				<input type="password" name="Cmdp" class="form-control" aria-describedby="basic-addon1">				
			</div>
			<input type="Submit" name="inscrit">
			<a href="/app/view/accueil.php"><button type="button" class="btn btn-default">Retour</button></a>
		</form>
	</body>
</html>