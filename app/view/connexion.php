<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<form method="POST" action="/app/controller/controllerconnexion.php">
			
			<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"></span>
  			<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email">
			Mot de Passe : <br>
			<input type="password" name="mdp"><br>
			<input type="Submit" name="inscrit">
		</form>
	</body>
</html>