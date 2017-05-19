<?php
	require_once('../model/ModelUtilisateur.php');

	if(isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['Cmdp'])){
		$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
		$mdp = htmlspecialchars($_POST['mdp'], ENT_QUOTES);
		$Cmdp = htmlspecialchars($_POST['Cmdp'], ENT_QUOTES);
		if ($mdp == $Cmdp){
			$mdp = sha1($mdp);
			$result = ModelUtilisateur::createUtilisateur($email, $mdp);
			echo "Inscription validée";
			header('refresh:3;url=/app/view/accueil.php');
		}
	}
?>