<?php 
	require_once("../model/ModelUtilisateur.php");
	require_once("../model/ModelAdministrateur.php");
	
	if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
		$email = $_POST['email'];
		$password = $_POST['mdp'];
		$verif_email = getIdAdmin($email);
		if(empty($verif_email)){ //Pas present dans table admin
			$verif_email = getIdUtil($email);
			if(empty($verif_email)){ //Pas present dans table utilisateur
				echo "Erreur dans l'email. Veuillez vous réauthentifier ou vous inscire";
				header("refresh:2;url=/connexion");
			}else{ //login existant
				$password = sha1($password);
				$verif_pass = getMdpUtil($email);
				if ($verif_pass != $password){ //Pas le mot de passe correspondant
					echo "Mot de passe utilisateur incorrect";
					header("refresh:2;url=/connexion");
				}else{
					$id = getIdUtil($email);
					$droit = sha1("util");
					setcookie("info", $id,time()+86400,"/");//dure un jour
					setcookie("droit", $droit,time()+86400,"/");
					header("Location: /user/listefilm");
					//connexion util
				}
			}
			
		}else{
			$password = sha1($password);
			$verif_pass = getMdpAdmin($email);
			if($verif_pass!=$password){ //Pas le mot de passe correspondant
				echo "Mot de passe administrateur incorrect";
			}else{
				$id = getIdUtil($email);
				$droit = sha1("admin");
				setcookie("info", $id,time()+86400,"/");
				setcookie("droit", $droit,time()+86400,"/");
				header("Location: /admin/dashboard");
				//connexion admin
			}
		}
	}else{
		header('Location: /connexion.php');
	}
?>