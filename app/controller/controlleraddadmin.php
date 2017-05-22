<?php
	require_once('../model/ModelAdmin.php');

	if(!empty($_POST['emailadmin']) AND !empty($_POST['mdpadmin'])){
		$email = htmlspecialchars($_POST['emailadmin']);
		$mdp = htmlspecialchars($_POST['mdpadmin']);
		if(!getIdAdmin($email)>0){
			$mdp = sha1($mdp);
			createAdministrateur($email, $mdp);
			echo "Administrateur ajouté";
		    header('refresh:3;url=/app/view/listefilm.php');
			}else{
				echo"Cet email est déjà utilisé";
				header("refresh:2;url=/app/view/addadmin.php");
			}
		}else{
			echo "Tous les champs ne sont pas remplis";
			header("refresh:2;url=/app/view/addadmin.php");
		}
?>