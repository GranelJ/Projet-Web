<?php require_once("/app/controller/controllerlistefilm.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Liste des films</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
		
	<body>
		<a href="/app/view/ajoutfilm.php">Ajouter un film</a>
		<a href="/app/controller/controllerdeconnexion.php">Déconnexion</a>
		<table>
			<tr>
				<th>Nom</th>
				<th>Annee</th>
				<th>Note</th>
				<th>Vu</th>
			</tr>
		</table>
		<!--tous les films de l'utilisateur-->
	</body>
</html>