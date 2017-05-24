<!DOCTYPE html>
<?php
	$droit = $_COOKIE["droit"];
	if($droit != sha1('admin')){
		header("Location: /app/view/accueil.php");
	}//verifie que la personne qui accède est un admin
?>
<html>
	<head>
		<title>Dashboard</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<a href="/app/view/addcategorie.php"><button type="button" class="btn btn-success">Ajouter une categorie</button></a>
		<a href="/app/view/addadmin.php"><button type="button" class="btn btn-success">Ajouter un administrateur</button></a>
		<a href="/app/controller/controllerdeconnexion.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>
	</body>
</html>