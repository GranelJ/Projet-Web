<?php
    setcookie("info", $token,time(),"/");//rends les cookies perime
	setcookie("droit", $droit,time(),"/");
    echo "Vous avez été déconnecté.";
    header('refresh:3;url=/app/view/accueil.php');//redirige apres 3s
?>