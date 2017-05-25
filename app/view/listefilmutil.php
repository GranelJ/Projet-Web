<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('util')){
		header("Location: /accueil");
	}//verifie que la personne qui accède est un utilisateur
?>
<html>
	<?php require_once("../controller/controllerlistefilm.php");
		  require_once("../model/ModelFilm.php"); ?>
	<head>
		<title>Liste des films</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
		
	<body>
		<a href="/user/ajoutfilm"><button type="button" class="btn btn-success">Ajouter un film</button></a>
		<a href="/user/suppressionfilm"><button type="button" class="btn btn-primary">Supprimer un film</button></a>
		<a href="/deconnexion"><button type="button" class="btn btn-danger">Deconnexion</button></a>
		<table>
			<tr>
				<th>Nom film</th>
				<th>Anne film</th>
				<th>Note</th>
				<th>1 si Vu</th>
			</tr>
			<?php
				while($ligne1=$film->fetch()){
					$infofilm=getNameFilmById($ligne1[id_film]);
					echo "<tr>";
					echo "<td>$infofilm[nom_film]</td>";
					echo "<td>$infofilm[annee_film]</td>";
					echo"<td>$ligne1[note_film]</td>";
					echo"<td>$ligne1[vu]</td>";
					echo"</tr>";
				}
			?>
		</table>
		<!--tous les films de l'utilisateur-->
	</body>
</html>