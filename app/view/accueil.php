<!DOCTYPE html>
<?php
	require_once("/app/controller/controllertestconnexion.php");
	if (isconnected()){
		$droit = $_COOKIE("droit");
		if($droit==sha1("admin")){
			header("Location: /app/view/dashboardadmin.php");
		}elseif($droit==sha1("util")){
			header("Location: /app/view/listefilmutil.php");
		}else{ ?>
			<html>
				<head>
					<title>Accueil</title>
				</head>

			<body>
				<a href="connexion.php">Se connecter</a>
				<a href="inscription.php">S'inscire</a>
			</body>
		</html>
		<?php
		}
	}
?>
