<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<form method="POST" action="/app/controller/controllerconnexion.php">
			
			<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1">Email</span>
  			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			</div>Email : <br>
			<input type="text" name="email"><br>
			Mot de Passe : <br>
			<input type="password" name="mdp"><br>
			<input type="Submit" name="inscrit">
		</form>
	</body>
</html>