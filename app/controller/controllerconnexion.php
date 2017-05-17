<?php require("../model/ModelUtilisateur.php");?>
<?php require("../model/ModelAdministrateur.php");?>

<?php
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	if(isset($_POST['email']) AND isset($_POST['mdp'])){
		$verif_email = selectByMailAdmin($email);
		if($verif_email[0] == ){
			$verif_email = selectByMailUtil($email);
			if($verid_email[0] == ){
				echo "Erreur dans l'email. Veuillez vous réauthentifier ou vous inscire";
			}else{ //login existant
				$password = sha1($password);
				$verif_pass = getMdpUtil($email);
				if ($verif_pass[0] == ){
					echo "Mot de passe incorrect";
				}else{
					header("");
					//connexion admin
				}
			}
			
		}else{
			$password = sha1($password);
			$verif_pass = getMdpAdmin($eamil);
			if($verif_pass[0] == ){
				echo "Mot de passe incorrect";
			}else{
				header("");
				//connexion util
			}
		}
	}else{
		header('Location: /app/view/connexion.php')
	}
?>