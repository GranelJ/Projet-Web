<?php
	require('../model/ModelUtilisateur.php');

	if(isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['Cmdp'])){
		$email = htmlentities($_POST['email'], ENT_QUOTES);
		$mdp = htmlentities($_POST['mdp'], ENT_QUOTES);
		$Cmdp = htmlentities($_POST['Cmdp'], ENT_QUOTES);
		if ($mdp == $Cmdp){
			$mdp = sha1($mdp);
			$result = createUtilisateur($email, $mdp);
			echo "Inscription validée";
		}
	}
?>