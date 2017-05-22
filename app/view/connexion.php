<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>Connexion</h2>
							<hr class="star-primary">
								<p>
								<form method="POST" action="/app/controller/controllerconnexion.php">
									Email : <br>
									<input type="text" name="email"><br>
									Mot de Passe : <br>
									<input type="password" name="mdp"><br>
									<input type="Submit" name="inscrit">
								</form>
								</p>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>