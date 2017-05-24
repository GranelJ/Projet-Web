<?php
	require_once('../model/ModelUtilisateur.php');

	if(isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['Cmdp'])){
		//si tous les champs remplis
		$email = htmlspecialchars($_POST['email']);
		$mdp = htmlspecialchars($_POST['mdp']);
		$Cmdp = htmlspecialchars($_POST['Cmdp']);
		if ($mdp == $Cmdp){
			$mdp = sha1($mdp);
			createUtilisateur($email, $mdp);
			echo "Inscription validée";
			header('refresh:3;url=/app/view/accueil.php');
		}else{//si mot de passe different
			echo "Erreur lors de la saisie du mot de passe";
			header("refresh:2;url=/app/view/inscription.php");
		}
	}else{
		echo "Tous les champs ne sont pas remplis";
		header("refresh:2;url:/app/view/inscription.php");
	}
?>