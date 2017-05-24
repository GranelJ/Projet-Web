<?php
	require_once('../model/ModelUtilisateur.php');

	if(!empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['Cmdp'])){
		//si tous les champs remplis
		$email = htmlspecialchars($_POST['email']);
		$mdp = htmlspecialchars($_POST['mdp']);
		$Cmdp = htmlspecialchars($_POST['Cmdp']);
		if ($mdp == $Cmdp){
			$mdp = sha1($mdp);
			createUtilisateur($email, $mdp);
			echo "Inscription validée";
			header('refresh:3;url=/accueil');
		}else{//si mot de passe different
			echo "Erreur lors de la saisie du mot de passe";
			header("refresh:2;url=/inscription");
		}
	}else{
		echo "Tous les champs ne sont pas remplis";
		header("refresh:2;url:/inscription");
	}
?>