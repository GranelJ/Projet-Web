<?php require_once("../controller/controllerlistefilm.php");?>
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
			<?php
				while($ligne1=$nomfilm->fetch()){
					echo"<tr>";
					echo"<td>$ligne1[nom_film]</td>";
					echo"<td>$ligne1[annee_film]</td>";
					echo"</tr>";
				}
			?>
		</table>
		<!--tous les films de l'utilisateur-->
	</body>
</html>