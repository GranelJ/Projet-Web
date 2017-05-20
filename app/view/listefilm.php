<!DOCTYPE html>
<html>
	<head>
		<title>Liste des films</title>
	</head>

	<body>
		<?php $droit = $_COOKIE("droit");
		if($droit=sha1("admin")){
			print('<a href="dashboard_admin.php">Dashboard</a>');
		}
		?>
		<a href="ajoutfilm.php">Ajouter un film</a>
	</body>
</html>