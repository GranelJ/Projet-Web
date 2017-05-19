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
			//header('Location: /app/view/accueil.php');
		}
	}
?>