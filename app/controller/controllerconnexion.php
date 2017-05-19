<?php require_once("../model/ModelUtilisateur.php");?>
<?php require_once("../model/ModelAdministrateur.php");?>

<?php
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	if(isset($_POST['email']) AND isset($_POST['mdp'])){
		$verif_email = getIdAdmin($email);
		if(empty($verif_email)){ //Pas present dans table admin
			$verif_email = getIdUtil($email);
			if(empty($verid_email)){ //Pas present dans table utilisateur
				echo "Erreur dans l'email. Veuillez vous réauthentifier ou vous inscire";
			}else{ //login existant
				$password = sha1($password);
				$verif_pass = getMdpUtil($email);
				if (empty($verif_pass)){ //Pas le mot de passe correspondant
					echo "Mot de passe incorrect";
				}else{
					$date = date("m.d.y");
					$token = sha1($date);
					$id = getIdUtil($email);
					$token.= sha1($id); //concatene les 2
					setcookie("info", $token,time()+86400,"/");//dure un jour
					header("Location: /app/view/listefilm.php");
					//connexion util
				}
			}
			
		}else{
			$password = sha1($password);
			$verif_pass = getMdpAdmin($email);
			if(empty($verif_pass[0])){ //Pas le mot de passe correspondant
				echo "Mot de passe incorrect";
			}else{
				$date = date("m.d.y");
				$token = sha1($date);
				$id = getIdUtil($email);
				$token.= sha1($id); //concatene les 2
				setcookie("info", $token,time()+86400,"/");
				header("Location: /app/view/listfilm.php");
				//connexion admin
			}
		}
	}else{
		header('Location: /app/view/connexion.php');
	}
?>