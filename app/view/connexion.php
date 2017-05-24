<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<form method="POST" action="/app/controller/controllerconnexion.php">
			<div class="input-group">
  				<input type="text" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
				<input type="password" name="mdp" class="form-control" placeholder="Mot de passe" aria-describedby="basic-addon1">
			</div>
            <button type="Submit" name="connexion" class="btn btn-default">Valider</button>
		</form>
	</body>
</html>