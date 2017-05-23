<?php
    setcookie("info", $token,time(),"/");//perime les cookies
	setcookie("droit", $droit,time(),"/");
    echo "Vous avez été déconnecté.";
    header('refresh:3;url=/app/view/accueil.php');//redirige apres 3s
?>