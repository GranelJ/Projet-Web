<?php require_once("../model/ModelUtilisateur.php");?>
<?php require_once("../model/ModelAdministrateur.php");?>

<?php
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	if(isset($_POST['email']) AND isset($_POST['mdp'])){
		$verif_email = getIdAdmin($email);
		if(empty($verif_email)){ //Pas present dans table admin
			$verif_email = getIdUtil($email);
			if(empty($verif_email)){ //Pas present dans table utilisateur
				echo "Erreur dans l'email. Veuillez vous réauthentifier ou vous inscire";
			}else{ //login existant
				$password = sha1($password);
				$verif_pass = getMdpUtil($email);
				if ($verif_pass != $password){ //Pas le mot de passe correspondant
					echo "Mot de passe utilisateur incorrect";
				}else{
					$date = date("m.d.y");
					$token = sha1($date);
					$id = getIdUtil($email);
					$token.= sha1($id); //concatene les 2
					$droit = sha1("util");
					setcookie("info", $token,time()+86400,"/");//dure un jour
					setcookie("droit", $droit,time()+86400,"/");
					header("Location: /app/view/listefilm.php");
					//connexion util
				}
			}
			
		}else{
			$password = sha1($password);
			$verif_pass = getMdpAdmin($email);
			if($verif_pass!=$password){ //Pas le mot de passe correspondant
				echo "Mot de passe administrateur incorrect";
			}else{
				$date = date("m.d.y");
				$token = sha1($date);
				$id = getIdUtil($email);
				$droit = sha1("admin");
				$token.= sha1($id); //concatene les 2
				setcookie("info", $token,time()+86400,"/");
				setcookie("droit", $droit,time()+86400,"/");
				header("Location: /app/view/listefilm.php");
				//connexion admin
			}
		}
	}else{
		header('Location: /app/view/connexion.php');
	}
?>