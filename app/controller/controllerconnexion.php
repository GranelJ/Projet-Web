<?php require("../model/ModelUtilisateur.php");?>
<?php require("../model/ModelAdministrateur.php");?>

<?php
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	if(isset($_POST['email']) AND isset($_POST['mdp'])){
		$verif_email = selectByMailAdmin($email);
		$
	}
?>