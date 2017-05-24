<!DOCTYPE html>
<html>
	<?php require_once("../controller/controllerlistefilm.php");?>
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
			<?php
					echo"<tr>";
					echo"<td>nom_film</td>";
					echo"<td>annee_film</td>";
					echo"<td>note_film</td>";
					echo"<td>vu</td>";
					echo"</tr>";
			?>
		</table>
		<!--tous les films de l'utilisateur-->
	</body>
</html>