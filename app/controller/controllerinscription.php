<?php
	require_once('../model/ModelUtilisateur.php');

	if(isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['Cmdp'])){
		$email = htmlspecialchars($_POST['email']);
		$mdp = htmlspecialchars($_POST['mdp']);
		$Cmdp = htmlspecialchars($_POST['Cmdp']);
		if ($mdp == $Cmdp){
			$mdp = sha1($mdp);
			createUtilisateur($email, $mdp);
			echo "Inscription validée";
			header('refresh:3;url=/app/view/accueil.php');
		}else{
			echo "Erreur lors de la vérification du mot de passe";
		}
	}
?>