<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('util')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un utilisateur
?>
<html>
	<?php require_once("../controller/controllerlistefilm.php");?>
	<head>
		<title>Liste des films</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
		
	<body>
		<a href="/user/ajoutfilm"><button type="button" class="btn btn-success">Ajouter un film</button></a>
		<a href="/deconnexion"><button type="button" class="btn btn-danger">Deconnexion</button></a>
		<table>
			<tr>
				<th>Nom</th>
				<th>Annee</th>
				<th>Note</th>
				<th>Vu</th>
			</tr>
			<?php
				while($ligne1=$film->fetch()){
					echo"<tr>";
					echo"<td>$ligne1[id_film]</td>";
					echo"<td>$ligne1[note_film]</td>";
					echo"<td>$ligne1[vu]</td>";
					echo"<td>rien</td>";
					echo"</tr>";
				}
			?>
		</table>
		<!--tous les films de l'utilisateur-->
	</body>
</html>