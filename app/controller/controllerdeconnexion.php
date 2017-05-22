<?php
    setcookie("info", $token,time()-86400,"/");//rends les cookies perime
	setcookie("droit", $droit,time()-86400,"/");
    echo "Vous avez été déconnecté.";
    header('refresh:3;url=/app/view/accueil.php');//redirige apres 3s
?>