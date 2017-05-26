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
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nom du film</th>
						<th>Annee du film</th>
						<th>Note</th>
						<th>Vu</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while($ligne1=$film->fetch()){
						$infofilm=getNameFilmById($ligne1[id_film]);
						echo "<tr>";
						echo "<td>$infofilm[nom_film]</td>";
						echo "<td>$infofilm[annee_film]</td>";
						echo"<td>$ligne1[note_film]</td>";
						if($ligne1[vu]==1){
							echo"<td>Vu</td>";
						}else{
							echo"<td>Non vu</td>";
						}
						echo"</tr>";
					}
				?>
				</tbody>
			</table>
		</div>
		<!--tous les films de l'utilisateur-->
	</body>
</html>