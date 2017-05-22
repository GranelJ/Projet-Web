<?php
	require_once('../model/ModelAdmin.php');

	if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
		$email = htmlspecialchars($_POST['email']);
		$mdp = htmlspecialchars($_POST['mdp']);
		$mdp = sha1($mdp);
		createAdministrateur($email, $mdp);
		echo "Inscription validée";
		    header('refresh:3;url=/app/view/listefilm.php');
		}else{
			echo "Tous les champs ne sont pas remplis";
			header("Location: /app/view/addadmin.php");
		}
?>