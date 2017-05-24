<?php
	require_once('../model/ModelAdministrateur.php');

	if(!empty($_POST['emailadmin']) AND !empty($_POST['mdpadmin'])){
		//si tout les champs sont rempli
		$email = htmlspecialchars($_POST['emailadmin']);
		$mdp = htmlspecialchars($_POST['mdpadmin']);
		if(getIdAdmin($email) == null){
			$mdp = sha1($mdp);//crypte mot de passe
			createAdministrateur($email, $mdp);
			echo "Administrateur ajouté";
		    header('refresh:3;url=/admin/dashboard');
			}else{//si email deja utilise
				echo"Cet email est déjà utilisé";
				header("refresh:2;url=/admin/ajoutadministrateur");
			}
		}else{//si un champ pas rempli
			echo "Tous les champs ne sont pas remplis";
			header("refresh:2;url=/admin/ajoutadministrateur");
		}
?>